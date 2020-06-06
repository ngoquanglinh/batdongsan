<?php

namespace App\Http\Controllers;

use App\danhmuc;
use Illuminate\Http\Request;
use App\province;
use App\tintuc;
use App\canmuacanthue;
use App\dientich;
use App\gia;
use Illuminate\Support\Carbon;

class homeController extends Controller
{
    public function index()
    {
        $tinh = province::all();
        $dientich = dientich::all();
        $gia = gia::all();
        $nhadatban = danhmuc::where('d_idparent', 1)->get();
        $tinSlide = tintuc::where('t_hoatdong', 1)->where('t_trangthai', 1)->orderBy('created_at')->take(5)->get();
        $tinrao = canmuacanthue::where('c_hoatdong', 1)->orderBy('created_at')->take(10)->get();
        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $lastweak = $date->subWeek();
        $tieudiem =  tintuc::where('t_hoatdong', 1)
            ->where('created_at', '>=', $lastweak)
            ->take(5)->get();
        return view('layouts.index', compact('gia', 'dientich', 'nhadatban', 'tinh', 'tinSlide', 'tinrao', 'tieudiem'));
    }
}
