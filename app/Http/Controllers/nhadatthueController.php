<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhadatthueController extends Controller
{
    public function NhaDatChoThue(){
    	return view('layouts.nhadatchothue.nhadatchothue');
    }
}
