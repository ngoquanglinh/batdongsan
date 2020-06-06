<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class danhbaController extends Controller
{
    public function DanhSachDanhBa()
    {
        $congtymoigioi = User::where('u_loaidanhba', 1)->get();
        $canhan = User::where('u_loaidanhba', 2)->get();
        return view('layouts.danhba.nhamoigioi', compact('congtymoigioi', 'canhan'));
    }
    public function DanhSachDoanhNghiep()
    {
        return view('layouts.danhba.doanhnghiep');
    }
}
