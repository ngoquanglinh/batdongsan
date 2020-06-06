<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\duan;
use App\danhmuc;
use App\district;
use App\province;
use App\tintuc;
use App\ward;
use Illuminate\Http\Request;

class duancontroller extends Controller
{
    public function DuAnBatDongSan()
    {
        return view("layouts.duan.duanbatdongsan");
    }
    public function getDanhSach()
    {
        $duan = duan::all();
        return view("admin.duan.danhsach", compact('duan'));
    }
    public function getThem()
    {
        $danhmuc = danhmuc::where('d_idparent', 3)->get();
        $tinh = province::all();
        return view("admin.duan.them", compact('danhmuc', 'tinh'));
    }
    public function postThem(Request $request)
    {
        $this->validate(
            $request,
            [
                'tenduan' => 'required|min:3|max:100',
                'danhmuc' => 'required',
                'tinh' => 'required',
                'huyen' => 'required',
                'xaduan' => 'required',
                'anh' => 'required',
                'motaduan' => 'required',
            ],
            [
                'tenduan.required' => 'Bạn chưa nhập tên dự án',
                'tenduan.max' => 'Tên dự án từ 3 đến 100 ký tự',
                'tenduan.min' => 'Tên dự án từ 3 đến 100 ký tự',
                'tenduan.required' => 'Bạn chưa chọn danh mục',
                'tinh.required' => 'Bạn chưa chọn tỉnh',
                'huyen.required' => 'Bạn chưa chọn huyện',
                'xaduan.required' => 'Bạn chưa chọn xã',
                'anh.required' => 'Bạn chưa thêm ảnh',
                'motaduan.required' => 'Bạn chưa thêm mô tả dự án',
            ]
        );
        $duan = new duan;
        $duan->d_tenduan = $request->tenduan;
        $duan->d_slug = changeTitle($request->tenduan);
        $duan->d_iddanhmuc = $request->danhmuc;
        $duan->d_idprovince = $request->tinh;
        $duan->d_iddistrict = $request->huyen;
        $duan->d_idward = $request->xaduan;
        $duan->d_duong = $request->duong;
        $duan->d_gia = $request->giaduan;
        $duan->d_thongtinduan = $request->motaduan;
        $duan->d_chudautu = $request->chuduan;
        $duan->d_tongdientich = $request->dientichduan;
        $duan->d_quymo = $request->quymoduan;
        $duan->d_bangiaonha = $request->bangiaonha;
        $duan->d_trangthai = $request->trangthai;
        $duan->d_hoatdong = $request->hoatdong;
        if ($request->hasFile('anh')) {
            $file = $request->file('anh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/duan/them')->with('loi', 'Ảnh phải có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            $file->move("assets/uploads/images", $hinh);
            $duan->d_anh = $hinh;
        } else {
            $duan->d_anh = "";
        }
        $duan->save();
        return redirect('admin/duan/danhsach')->withInput()->with('thongbao', 'Thêm thành công');
    }
    public function getSua($id)
    {
        $tintuc = tintuc::find($id);
        return view('admin.tintuc.sua', ['tintuc' => $tintuc]);
    }
    public function postSua(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'ten' => 'required',
                'noidung' => 'required',
                'tomtat' => 'required',
            ],
            [
                'ten.required' => 'Bạn chưa nhập tên tin tức',
                'noidung.required' => 'Bạn chưa thêm nội dung',
                'tomtat.required' => 'Bạn chưa thêm tóm tắt',

            ]
        );
        $tintuc = tintuc::find($id);
        $tintuc->tentintuc = $request->ten;
        $tintuc->slug = changeTitle($request->ten);
        $tintuc->trangthai = $request->status;
        $tintuc->noidung = $request->noidung;
        $tintuc->noidungtomtat = $request->tomtat;
        $tintuc->khuyenmai = $request->khuyenmai;
        $tintuc->nguoidang = $request->nguoidang;
        $tintuc->noibat = $request->noibat;
        if ($request->hasFile('anh')) {
            $file = $request->file('anh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/sanpham/them')->with('loi', 'Ảnh phải có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            $file->move("uploads/images", $hinh);
            unlink("uploads/images/" . $tintuc->hinhanh);
            $tintuc->hinhanh = $hinh;
        }
        $tintuc->save();
        return redirect('admin/tintuc/danhsach')->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $duan = duan::find($id);
        $duan->delete();
        return redirect("admin/duan/danhsach")->with('thongbao', 'xóa dự án thành công');
    }
}
