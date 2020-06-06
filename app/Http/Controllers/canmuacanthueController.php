<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\province;
use App\huongbancong;
use App\huongnha;
use App\loaitinrao;
use App\danhmuc;
use App\gia;
use App\user;
use Carbon\Carbon;
use App\dientich;
use App\canmuacanthue;
use App\anhcanmuacanthue;

class canmuacanthueController extends Controller
{
    public function DanhSach()
    {
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $canmuacanthue = canmuacanthue::whereDate('c_ngayhethan', '>=', $date)
            ->where('c_hoatdong', 1)
            ->orderBy('created_at')->paginate(10);
        return view('layouts.canmuacanthue.canmuacanthue', compact('canmuacanthue'));
    }
    public function chitiettin($slug)
    {
        $tinrao = canmuacanthue::where('c_slug', $slug)->first();
        return view("layouts.canmuacanthue.chitiet", compact('tinrao'));
    }
    public function getDangTinMua()
    {
        $hinhthuc = danhmuc::where('id', 38)->orWhere('id', 39)->get();
        $tinh = province::all();
        $gia = gia::all();
        $dientich = dientich::all();
        return view('layouts.dangtinraovatmua', compact('hinhthuc', 'tinh', 'gia', 'dientich'));
    }
    public function postDangTinMua(request $request)
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
                'mota' => 'required',
                'tenlienhe' => 'required',
                'diachilh' => 'required',
                'dienthoai' => 'required',
                'didong' => 'required|numeric',
                'email' => 'required|email',
                'ngaybatdau' => 'required',
                'ngayketthuc' => 'required',
            ],
            [
                'tieude.required' => 'Bạn chưa nhập tiêu đề',
                'hinhthuc.required' => 'Bạn chưa chọn hình thức',
                'phanmuc.required' => 'Bạn chưa chọn phân mục',
                'tinh.required' => 'Bạn chưa chọn tỉnh',
                'huyen.required' => 'Bạn chưa chọn tỉnh',
                'phuong.required' => 'Bạn chưa chọn phường',
                'duong.required' => 'Bạn chưa nhập đường',
                'mota.required' => 'Bạn chưa nhập mô tả',
                'tenlienhe.required' => 'Bạn chưa nhập tên liên hệ',
                'dienthoai.required' => 'Bạn chưa nhập số điện thoại',
                'diachilh.required' => 'Bạn chưa nhập địa chỉ liên hệ',
                'didong.required' => 'Bạn chưa nhập di động',
                'didong.numeric' => 'số điện thoại bạn nhập không đúng',
                'dienthoai' => 'Bạn chưa nhập số điện thoại',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'email bạn nhập không đúng',
                'ngaybatdau.required' => 'Bạn chưa chọn ngày',
                'ngayketthuc.required' => 'Bạn chưa chọn ngày',
            ]
        );
        if (Auth::check()) {
            $tinrao = new canmuacanthue;
            $tinrao->c_slug = changeTitle($request->tieude);
            $tinrao->c_idhinhthuc = $request->hinhthuc;
            $tinrao->c_idloai = $request->phanmuc;
            $tinrao->c_tieude = $request->tieude;
            $tinrao->c_idtinh = $request->tinh;
            $tinrao->c_idhuyen = $request->huyen;
            $tinrao->c_idxa = $request->phuong;
            $tinrao->c_idgia = $request->gia;
            $tinrao->c_iddientich = $request->dientich;
            $tinrao->c_duong = $request->duong;
            $tinrao->c_idduan = $request->duan;
            $tinrao->c_diachi = $request->diachi;
            $tinrao->c_mota = $request->mota;
            $tinrao->c_ngaydang = formatDate($request->ngaybatdau);
            $tinrao->c_ngayhethan = formatDate($request->ngayketthuc);
            $tinrao->c_emailphanhoi = $request->nhanmail;
            $tinrao->c_idnguoidang = Auth::user()->id;
            $tinrao->save();
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $anhbds = new anhcanmuacanthue;
                    if (isset($file)) {
                        $anhbds->a_idtinrao = $tinrao->id;
                        $name = $file->getClientOriginalName();
                        $hinh = Str::random(4) . "_" . $name;
                        $file->move('assets/uploads/images', $hinh);
                        $anhbds->a_ten = $hinh;
                        $anhbds->save();
                    }
                }
            }
            return redirect('dang-tin-rao-vat-mua-nha-dat')->with('thongbao', 'Thêm thành công');
        } else {
            $user = new user;
            $user->name = $request->tenlienhe;
            $user->email = $request->email;
            $user->u_didong = $request->didong;
            $user->u_dienthoai = $request->dienthoai;
            $user->u_lienhe = $request->diachilh;
            $user->save();
            $user->assignRole(['khach']);
            $tinrao = new canmuacanthue;
            $tinrao->c_slug = changeTitle($request->tieude);
            $tinrao->c_idhinhthuc = $request->hinhthuc;
            $tinrao->c_idloai = $request->phanmuc;
            $tinrao->c_tieude = $request->tieude;
            $tinrao->c_idtinh = $request->tinh;
            $tinrao->c_idhuyen = $request->huyen;
            $tinrao->c_idxa = $request->phuong;
            $tinrao->c_idgia = $request->gia;
            $tinrao->c_iddientich = $request->dientich;
            $tinrao->c_duong = $request->duong;
            $tinrao->c_idduan = $request->duan;
            $tinrao->c_diachi = $request->diachi;
            $tinrao->c_mota = $request->mota;
            $tinrao->c_ngaydang = formatDate($request->ngaybatdau);
            $tinrao->c_ngayhethan = formatDate($request->ngayketthuc);
            $tinrao->c_emailphanhoi = $request->nhanmail;
            $tinrao->c_idnguoidang = $user->id;
            $tinrao->save();
            $tinrao->save();
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $anhbds = new anhcanmuacanthue;
                    if (isset($file)) {
                        $anhbds->a_idtinrao = $tinrao->id;
                        $name = $file->getClientOriginalName();
                        $hinh = Str::random(4) . "_" . $name;
                        $file->move('assets/uploads/images', $hinh);
                        $anhbds->a_ten = $hinh;
                        $anhbds->save();
                    }
                }
            }
            return redirect('dang-tin-rao-vat-mua-nha-dat')->withInput()->with('thongbao', 'Thêm thành công');
        }
    }
    public function getDanhSach()
    {
        $tinrao = canmuacanthue::all();
        return view('admin.tinraomua.danhsach', compact('tinrao'));
    }
    public function getSua($id)
    {
        $tinrao = canmuacanthue::find($id);
        return view('admin.tinraomua.sua', compact('tinrao'));
    }
    public function postSua(request $request, $id)
    {
        $tintuc = canmuacanthue::find($id);
        $tintuc->c_hoatdong = $request->hoatdong;
        $tintuc->save();
        return redirect('admin/tinraomua/sua/' . $id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $tintuc = canmuacanthue::find($id);
        $tintuc->delete();
        return redirect("admin/tinraomua/danhsach")->with('thongbao', 'xóa tin tức thành công');
    }
}
