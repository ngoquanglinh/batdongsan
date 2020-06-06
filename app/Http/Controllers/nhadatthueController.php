<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\batdongsan;
use Carbon\Carbon;

class nhadatthueController extends Controller
{
    public function NhaDatChoThue()
    {
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();;
        $nhadatchothue = batdongsan::whereDate('b_ngayhethan', '>=', $date)
            ->whereDate('b_ngaydang', '<=', $date)
            ->where('b_hoatdong', 1)
            ->where('b_idhinhthucbds', 2)
            ->orderBy('b_idloaitinrao', 'desc')
            ->orderBy('b_idloaitinrao')->paginate(10);
        return view('layouts.nhadatchothue.nhadatchothue', compact('nhadatchothue'));
    }
    public function ChiTietNhaDatChoThue($slug)
    {
        $tinrao = batdongsan::where('b_slug', $slug)->first();
        return view('layouts.nhadatchothue.loainhadatchothue', compact('tinrao'));
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $search = batdongsan::where('b_idhinhthucbds', 2)
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
