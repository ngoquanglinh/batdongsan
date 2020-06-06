<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canmuacanthue extends Model
{
    protected $table = 'canmuacanthue';
    public function province()
    {
        return $this->belongsTo('App\province', 'c_idtinh', 'id');
    }
    public function hinhthuc()
    {
        return $this->belongsTo('App\danhmuc', 'c_idhinhthuc', 'id');
    }
    public function loaibds()
    {
        return $this->belongsTo('App\danhmuc', 'c_idloai', 'id');
    }
    public function duan()
    {
        return $this->belongsTo('App\duan', 'c_idduan', 'id');
    }
    public function khachhang()
    {
        return $this->belongsTo('App\user', 'c_idnguoidang', 'id');
    }
    public function anhcanmuacanthue()
    {
        return $this->hasMany('App\anhcanmuacanthue', 'a_idtinrao', 'id');
    }
    public function gia()
    {
        return $this->belongsto('App\gia', 'c_idgia', 'id');
    }
    public function xa()
    {
        return $this->belongsto('App\ward', 'c_idxa', 'id');
    }
    public function huyen()
    {
        return $this->belongsto('App\district', 'c_idhuyen', 'id');
    }
    public function tinh()
    {
        return $this->belongsto('App\province', 'c_idtinh', 'id');
    }
    public function dientich()
    {
        return $this->belongsto('App\dientich', 'c_iddientich', 'id');
    }
    public function user()
    {
        return $this->belongsto('App\User', 'c_idnguoidang', 'id');
    }
}
