<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batdongsan extends Model
{
    protected $table = 'batdongsan';

    public function hinhthuc()
    {
        return $this->belongsTo('App\danhmuc', 'b_idhinhthucbds', 'id');
    }
    public function loaibds()
    {
        return $this->belongsTo('App\danhmuc', 'b_idloaibds', 'id');
    }
    public function duan()
    {
        return $this->belongsTo('App\duan', 'b_idduan', 'id');
    }
    public function khachhang()
    {
        return $this->belongsTo('App\user', 'b_idnguoidang', 'id');
    }
    public function loaitinrao()
    {
        return $this->belongsTo('App\loaitinrao', 'b_idloaitinrao', 'id');
    }
    public function donvibds()
    {
        return $this->belongsTo('App\donvi', 'b_iddonvi', 'id');
    }
    public function huyen()
    {
        return $this->belongsTo('App\district', 'b_idquan', 'id');
    }
    public function tinh()
    {
        return $this->belongsTo('App\province', 'b_idtinh', 'id');
    }
    public function xa()
    {
        return $this->belongsTo('App\ward', 'b_idxa', 'id');
    }
    public function anhbds()
    {
        return $this->hasMany('App\anhbds', 'a_idbds', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'b_idnguoidang', 'id');
    }
}
