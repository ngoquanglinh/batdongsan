<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\province;
use App\huongbancong;
use Illuminate\Support\Facades\DB;
use App\huongnha;
use App\loaitinrao;
use App\batdongsan;
use App\danhmuc;
use App\user;
use Carbon\Carbon;
use App\anhbds;

class nhadatController extends Controller
{
    public function NhaDatBan()
    {
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $nhadatban = batdongsan::whereDate('b_ngayhethan', '>=', $date)
            ->whereDate('b_ngaydang', '<=', $date)
            ->where('b_hoatdong', 1)
            ->where('b_idhinhthucbds', 1)
            ->orderBy('b_idloaitinrao')
            ->orderBy('b_idloaitinrao', 'desc')
            ->paginate(10);
        return view('layouts.nhadatban.nhadat', compact('nhadatban'));
    }
    public function LoaiNhaDatBan($slug)
    {
        $tinrao = batdongsan::where('b_slug', $slug)->first();
        return view('layouts.nhadatban.loainhadatban', compact('tinrao'));
    }
    public  function getDangTinBan()
    {
        $tinh = province::all();
        $huongbancong = huongbancong::all();
        $huongnha = huongnha::all();
        $loaitinrao = loaitinrao::all();
        $hinhthuc = danhmuc::where('id', 1)->orwhere('id', 2)->get();
        return view('layouts.dangtinraovatban', compact('tinh', 'huongbancong', 'huongnha', 'loaitinrao', 'hinhthuc'));
    }
    public function postDangTinBan(request $request)
    {
        $this->validate(
            $request,
            [
                'tieude' => 'required',
                'hinhthuc' => 'required',
                'phanmuc' => 'required',
                'tinh' => 'required',
                'huyen' => 'required',
                'phuong' => 'required',
                'duong' => 'required',
                'dientich' => 'required',
                'giabds' => 'required',
                'donvi' => 'required',
                'diachi' => 'required',
                'mota' => 'required',
                'mattien' => 'required',
                'duongvao' => 'required',
                'sotang' => 'required',
                'sophongngu' => 'required',
                'sotoilet' => 'required',
                'noithat' => 'required',
                'tenlienhe' => 'required',
                'diachilh' => 'required',
                'dienthoai' => 'required',
                'didong' => 'required|numeric',
                'email' => 'required|email',
                'ngaybatdau' => 'required',
                'ngayketthuc' => 'required',
                'txtaddress' => 'required',
            ],
            [
                'tieude.required' => 'Bạn chưa nhập tiêu đề',
                'hinhthuc.required' => 'Bạn chưa chọn hình thức',
                'phanmuc.required' => 'Bạn chưa chọn phân mục',
                'tinh.required' => 'Bạn chưa chọn tỉnh',
                'huyen.required' => 'Bạn chưa chọn tỉnh',
                'phuong.required' => 'Bạn chưa chọn phường',
                'duong.required' => 'Bạn chưa nhập đường',
                'dientich.required' => 'Bạn chưa nhập diện tích',
                'giabds.required' => 'Bạn chưa nhập giá',
                'donvi.required' => 'Bạn chưa chọn đơn vị',
                'mota.required' => 'Bạn chưa nhập mô tả',
                'mattien.required' => 'Bạn chưa nhập mặt tiền',
                'duongvao.required' => 'Bạn chưa nhập đường vào',
                'sotang.required' => 'Bạn chưa nhập số tầng',
                'sophongngu.required' => 'Bạn chưa nhập số phòng ngủ',
                'sotoilet.required' => 'Bạn chưa nhập số toilet',
                'noithat.required' => 'Bạn chưa nhập nội thất',
                'tenlienhe.required' => 'Bạn chưa nhập tên liên hệ',
                'diachilh.required' => 'Bạn chưa nhập địa chỉ liên hệ',
                'didong.required' => 'Bạn chưa nhập di động',
                'didong.numeric' => 'số điện thoại bạn nhập không đúng',
                'dienthoai' => 'Bạn chưa nhập số điện thoại',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'email bạn nhập không đúng',
                'ngaybatdau.required' => 'Bạn chưa chọn ngày',
                'ngayketthuc.required' => 'Bạn chưa chọn ngày',
                'txtaddress.required' => 'Bạn chưa chọn map',
            ]
        );
        if (Auth::check()) {
            $tin = new batdongsan;
            $tin->b_slug = changeTitle($request->tieude);
            $tin->b_idhinhthucbds = $request->hinhthuc;
            $tin->b_idloaibds = $request->phanmuc;
            $tin->b_tieude = $request->tieude;
            $tin->b_idtinh = $request->tinh;
            $tin->b_idquan = $request->huyen;
            $tin->b_idxa = $request->phuong;
            $tin->b_duong = $request->duong;
            $tin->b_idduan = $request->duan;
            $tin->b_dientich = $request->dientich;
            $tin->b_idhuongnha = $request->huongnha;
            $tin->b_idhuongbancong = $request->huongbancong;
            $tin->b_gia = $request->giabds;
            $tin->b_iddonvi = $request->donvi;
            $tin->b_diachi = $request->diachi;
            $tin->b_mota = $request->mota;
            $tin->b_idhuongnha = $request->huongnha;
            $tin->b_idhuongbancong = $request->huongbancong;
            $tin->b_sophongngu = $request->sophongngu;
            $tin->b_idsotoilet = $request->sotoilet;
            $tin->b_noithat = $request->noithat;
            $tin->b_idloaitinrao = $request->loaitin;
            $tin->b_ngaydang = formatDate($request->ngaybatdau);
            $tin->b_ngayhethan = formatDate($request->ngayketthuc);
            $tin->b_giadang = $request->tien;
            $tin->b_idnguoidang = Auth::user()->id;
            $tin->b_emailphanhoi = $request->nhanmail;
            $tin->b_lat = $request->txtlat;
            $tin->b_lng = $request->txtlng;
            $tin->save();
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $anhbds = new anhbds;
                    if (isset($file)) {
                        $anhbds->a_idbds = $tin->id;
                        $name = $file->getClientOriginalName();
                        $hinh = Str::random(4) . "_" . $name;
                        $file->move('assets/uploads/images', $hinh);
                        $anhbds->a_anh = $hinh;
                        $anhbds->save();
                    }
                }
            }
            return redirect('dang-tin-rao-vat-ban-nha-dat')->withInput()->with('thongbao', 'Thêm thành công');
        } else {
            $user = new user;
            $user->name = $request->tenlienhe;
            $user->email = $request->email;
            $user->u_didong = $request->didong;
            $user->u_dienthoai = $request->dienthoai;
            $user->u_lienhe = $request->diachilh;
            $user->save();
            $user->assignRole(['khach']);
            $tin = new batdongsan;
            $tin->b_slug = changeTitle($request->tieude);
            $tin->b_idhinhthucbds = $request->hinhthuc;
            $tin->b_idloaibds = $request->phanmuc;
            $tin->b_tieude = $request->tieude;
            $tin->b_idtinh = $request->tinh;
            $tin->b_idquan = $request->huyen;
            $tin->b_idxa = $request->phuong;
            $tin->b_duong = $request->duong;
            $tin->b_idduan = $request->duan;
            $tin->b_dientich = $request->dientich;
            $tin->b_idhuongnha = $request->huongnha;
            $tin->b_idhuongbancong = $request->huongbancong;
            $tin->b_gia = $request->giabds;
            $tin->b_iddonvi = $request->donvi;
            $tin->b_diachi = $request->diachi;
            $tin->b_mota = $request->mota;
            $tin->b_idhuongnha = $request->huongnha;
            $tin->b_idhuongbancong = $request->huongbancong;
            $tin->b_sophongngu = $request->sophongngu;
            $tin->b_idsotoilet = $request->sotoilet;
            $tin->b_noithat = $request->noithat;
            $tin->b_idloaitinrao = $request->loaitin;
            $tin->b_ngaydang = formatDate($request->ngaybatdau);
            $tin->b_ngayhethan = formatDate($request->ngayketthuc);
            $tin->b_giadang = $request->tien;
            $tin->b_idnguoidang = $user->id;
            $tin->b_emailphanhoi = $request->nhanmail;
            $tin->b_lat = $request->txtlat;
            $tin->b_lng = $request->txtlng;
            $tin->save();
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $anhbds = new anhbds;
                    if (isset($file)) {
                        $anhbds->a_idbds = $tin->id;
                        $name = $file->getClientOriginalName();
                        $hinh = Str::random(4) . "_" . $name;
                        $file->move('assets/uploads/images', $hinh);
                        $anhbds->a_anh = $hinh;
                        $anhbds->save();
                    }
                }
            }
            return redirect('dang-tin-rao-vat-ban-nha-dat')->withInput()->with('thongbao', 'Thêm thành công');
        }
    }
    public function getDanhSach()
    {
        $tinrao = batdongsan::all();
        return view('admin.tinraoban.danhsach', compact('tinrao'));
    }
    public function getSua($id)
    {
        $tinrao = batdongsan::find($id);
        return view('admin.tinraoban.sua', compact('tinrao'));
    }
    public function postSua(request $request, $id)
    {
        $tintuc = batdongsan::find($id);
        $tintuc->b_hoatdong = $request->hoatdong;
        $tintuc->save();
        return redirect('admin/tinraoban/sua/' . $id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $tintuc = batdongsan::find($id);
        $tintuc->delete();
        return redirect("admin/tinraoban/danhsach")->with('thongbao', 'xóa tin tức thành công');
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $search = batdongsan::where('b_idhinhthucbds', 1)
                ->where(function ($query)  use ($request) {
                    $query->where('b_tieude', 'LIKE', '%' . $request->search  . '%')
                        ->orWhere('b_mota', 'LIKE', '%' . $request->search . '%');
                })
                ->whereDate('b_ngayhethan', '>=', $date)
                ->whereDate('b_ngaydang', '<=', $date)
                ->take(5)->get();
            return Response()->json([
                "success" => $search
            ]);
        }
    }
}
