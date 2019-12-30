<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canmuacanthue extends Model
{
    protected $table='canmuacanthue';
    public function province(){
    	return $this->belongsTo('App\province','c_idtinh','id');
    }
    public function hinhthuc(){
        return $this->belongsTo('App\danhmuc','c_idhinhthuc','id');
    }
    public function loaibds(){
        return $this->belongsTo('App\danhmuc','c_idloai','id');
    }
    public function duan(){
        return $this->belongsTo('App\duan','c_idduan','id');
    }
    public function khachhang(){
        return $this->belongsTo('App\user','c_idnguoidang','id');
    }
}
