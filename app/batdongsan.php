<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batdongsan extends Model
{
    protected $table='batdongsan';
    public function hinhthuc(){
        return $this->belongsTo('App\danhmuc','b_idhinhthucbds','id');
    }
    public function loaibds(){
        return $this->belongsTo('App\danhmuc','b_idloaibds','id');
    }
    public function duan(){
        return $this->belongsTo('App\duan','b_idduan','id');
    }
    public function khachhang(){
        return $this->belongsTo('App\user','b_idnguoidang','id');
    }
    public function loaitinrao(){
        return $this->belongsTo('App\loaitinrao','b_idloaitinrao','id');
    }
}
