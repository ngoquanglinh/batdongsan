<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;
use App\tintuc;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class tintucController extends Controller
{
    public function DanhSach()
    {
        $tinxemnhieu = tintuc::where('t_hoatdong', 1)->orderBy('t_luotxem', 'desc')->take(6)->get();
        $tinnoibat1 = tintuc::where('t_noibat', 1)
            ->orderBy('created_at')->first();
        $tinnoibat2 = tintuc::where('t_noibat', 1)
            ->orderBy('created_at')->skip(1)->take(3)->get();
        $tinnoibat3 = tintuc::where('t_noibat', 1)
            ->orderBy('created_at')->skip(4)->take(3)->get();
        return view('layouts.tintuc.tintuc', compact('tinnoibat1', 'tinnoibat2', 'tinnoibat3', 'tinxemnhieu'));
    }
    public function getDanhSach()
    {
        $tintuc = tintuc::all();
        return view('admin.tintuc.danhsach', compact('tintuc'));
    }
    public function getThem()
    {
        $danhmuc = danhmuc::whereIn('id', [6, 7, 8, 9])
            ->orWhere(function ($query) {
                $query->whereIn('d_idparent',  [6, 7, 8, 9]);
            })->get();
        return view('admin.tintuc.them', compact('danhmuc'));
    }
    public function postThem(request $request)
    {

        $this->validate(
            $request,
            [
                'ten' => 'required|unique:tintuc,t_tentintuc',
                'motangan' => 'required',
                'mota' => 'required',
            ],
            [
                'ten.unique' => 'Tiều đề bị trùng',
                'ten.required' => 'Bạn chưa thêm tên tin tức',
                'motangan.required' => 'Bạn chưa thêm mô tả ngắn',
                'mota.required' => 'Bạn chưa thêm mô tả',

            ]
        );
        $tintuc = new tintuc;
        $tintuc->t_iddanhmuc = $request->danhmuc;
        $tintuc->t_tentintuc = $request->ten;
        $tintuc->t_motangan = $request->motangan;
        $tintuc->t_mota = $request->mota;
        $tintuc->t_nguontin = $request->link;
        $tintuc->t_nguoidang = $request->nguoidang;
        $tintuc->t_slug = changeTitle($request->ten);
        $tintuc->t_noibat = $request->noibat;
        $tintuc->t_trangthai = $request->trangthai;
        $tintuc->t_hoatdong = $request->hoatdong;
        $tintuc->t_idnguoidang = Auth::user()->id;
        if ($request->hasFile('anh')) {
            $file = $request->file('anh');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            $file->move("assets/uploads/images", $hinh);
            $tintuc->t_hinhanh = $hinh;
        } else {
            $tintuc->t_hinhanh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao', 'Thêm thành công');
    }
    public function getSua($id)
    {
        $danhmuc = danhmuc::all();
        $tintuc = tintuc::find($id);
        return view('admin.tintuc.sua', compact('tintuc', 'danhmuc'));
    }
    public function postSua(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'ten' => 'required',
                'motangan' => 'required',
                'mota' => 'required',
            ],
            [
                'ten.required' => 'Bạn chưa thêm tên tin tức',
                'motangan.required' => 'Bạn chưa thêm mô tả ngắn',
                'mota.required' => 'Bạn chưa thêm mô tả',

            ]
        );
        $tintuc = tintuc::find($id);
        $tintuc->t_iddanhmuc = $request->danhmuc;
        $tintuc->t_tentintuc = $request->ten;
        $tintuc->t_motangan = $request->motangan;
        $tintuc->t_mota = $request->mota;
        $tintuc->t_nguontin = $request->link;
        $tintuc->t_nguoidang = $request->nguoidang;
        $tintuc->t_slug = changeTitle($request->ten);
        $tintuc->t_noibat = $request->noibat;
        $tintuc->t_trangthai = $request->trangthai;
        $tintuc->t_hoatdong = $request->hoatdong;
        if ($request->hasFile('anh')) {
            $file = $request->file('anh');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            $file->move("assets/uploads/images", $hinh);
            if ($tintuc->t_hinhanh > 0) {
                unlink("assets/uploads/images/" . $tintuc->t_hinhanh);
            }
            $tintuc->t_hinhanh = $hinh;
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/' . $id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $tintuc = tintuc::find($id);
        $tintuc->delete();
        return redirect("admin/tintuc/danhsach")->with('thongbao', 'xóa tin tức thành công');
    }
    public function ChiTiet(Request $request, $slug)
    {
        $tintuc = tintuc::where('t_slug', $slug)->first();
        $sessionKey = 'tintuc_' . $tintuc->id;
        $sessionView =  $request->session()->get($sessionKey);
        if (!$sessionView) {
            $request->session()->put($sessionKey, 1);
            $tintuc->increment('t_luotxem');
        }
        $tindocnhieu = tintuc::where('t_hoatdong', 1)->orderBy('t_luotxem', 'desc')->take(5)->get();
        $tinmoinhat = tintuc::where('t_hoatdong', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view("layouts.tintuc.chitiettintuc", compact('tintuc', 'tindocnhieu', 'tinmoinhat'));
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $search = tintuc::where('t_tentintuc', 'LIKE', '%' . $request->search . '%')
                ->orWhere('t_mota', 'LIKE', '%' . $request->search . '%')
                ->orWhere('t_motangan', 'LIKE', '%' . $request->search . '%')
                ->take(5)->get();
            return Response()->json([
                "success" => $search
            ]);
        }
    }
}
