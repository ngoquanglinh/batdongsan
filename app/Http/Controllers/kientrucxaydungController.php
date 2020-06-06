<?php

namespace App\Http\Controllers;

use App\tintuc;
use Illuminate\Http\Request;

class kientrucxaydungController extends Controller
{
    public function DanhSachXayDung()
    {
        $tinxemnhieu = tintuc::where('t_hoatdong', 1)->where('t_iddanhmuc', 76)->orderBy('t_luotxem', 'desc')->take(6)->get();
        $tinnoibat1 = tintuc::where('t_noibat', 1)->where('t_iddanhmuc', 76)
            ->orderBy('created_at')->first();
        $tinnoibat2 = tintuc::where('t_noibat', 1)->where('t_iddanhmuc', 76)
            ->orderBy('created_at')->skip(1)->take(3)->get();
        $tinnoibat3 = tintuc::where('t_noibat', 1)->where('t_iddanhmuc', 76)
            ->orderBy('created_at')->skip(4)->take(3)->get();
        return view('layouts.xaydungkientruc.xaydung', compact('tinnoibat1', 'tinnoibat2', 'tinnoibat3', 'tinxemnhieu'));
    }
    public function DanhSachKienTruc()
    {
        return view('layouts.xaydungkientruc.kientruc');
    }
}
