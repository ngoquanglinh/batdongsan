<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;
use App\tintuc;
use Illuminate\Support\Str;
class tintucController extends Controller
{
    public function DanhSach(){
    	return view('layouts.tintuc.tintuc');
    }
    public function getDanhSach(){
        $tintuc=tintuc::all();
    	return view('admin.tintuc.danhsach',compact('tintuc'));
    }
    public function getThem(){
        $danhmuc=danhmuc::all();
    	return view('admin.tintuc.them',compact('danhmuc'));
    }
    public function postThem(request $request)
    {

        $this->validate($request,
            [
                'ten'=>'required|unique:tintuc,t_tentintuc',
                'motangan'=>'required',
                'mota'=>'required',
            ],
            [
                'ten.unique'=>'Tiều đề bị trùng',
                'ten.required'=>'Bạn chưa thêm tên tin tức',
                'motangan.required'=>'Bạn chưa thêm mô tả ngắn',
                'mota.required'=>'Bạn chưa thêm mô tả',

            ]);
        $tintuc=new tintuc;
        $tintuc->t_iddanhmuc=$request->danhmuc;
        $tintuc->t_tentintuc=$request->ten;
        $tintuc->t_motangan=$request->motangan;
        $tintuc->t_mota=$request->mota;
        $tintuc->t_nguontin=$request->link;
        $tintuc->t_nguoidang=$request->nguoidang;
        $tintuc->t_slug=changeTitle($request->ten);
        $tintuc->t_noibat=$request->noibat;
        $tintuc->t_trangthai=$request->trangthai;
        $tintuc->t_hoatdong=$request->hoatdong;
        if($request->hasFile('anh'))
        {
            $file=$request->file('anh');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("assets/uploads/images",$hinh);
            $tintuc->t_hinhanh=$hinh;
        }else{
            $tintuc->t_hinhanh="";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $danhmuc=danhmuc::all();
        $tintuc=tintuc::find($id);
        return view('admin.tintuc.sua',compact('tintuc','danhmuc'));
    }
    public function postSua(request $request,$id){
        $this->validate($request,
        [
            'ten'=>'required',
            'motangan'=>'required',
            'mota'=>'required',
        ],
        [
            'ten.required'=>'Bạn chưa thêm tên tin tức',
            'motangan.required'=>'Bạn chưa thêm mô tả ngắn',
            'mota.required'=>'Bạn chưa thêm mô tả',

        ]);
        $tintuc=tintuc::find($id);
        $tintuc->t_iddanhmuc=$request->danhmuc;
        $tintuc->t_tentintuc=$request->ten;
        $tintuc->t_motangan=$request->motangan;
        $tintuc->t_mota=$request->mota;
        $tintuc->t_nguontin=$request->link;
        $tintuc->t_nguoidang=$request->nguoidang;
        $tintuc->t_slug=changeTitle($request->ten);
        $tintuc->t_noibat=$request->noibat;
        $tintuc->t_trangthai=$request->trangthai;
        $tintuc->t_hoatdong=$request->hoatdong;
        if($request->hasFile('anh'))
        {
            $file=$request->file('anh');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("assets/uploads/images",$hinh);
            if($tintuc->t_hinhanh>0){
                unlink("assets/uploads/images/".$tintuc->t_hinhanh);
            }
            $tintuc->t_hinhanh=$hinh;
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $tintuc=tintuc::find($id);
        $tintuc->delete();
        return redirect("admin/tintuc/danhsach")->with('thongbao','xóa tin tức thành công');
    }
    public function ChiTiet($id){
        return view("layouts.tintuc.chitiettintuc");
    }
}
