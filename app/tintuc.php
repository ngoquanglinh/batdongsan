<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table = 'tintuc';
    public function danhmuc()
    {
        return $this->belongsTo('App\danhmuc', 't_iddanhmuc', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 't_idnguoidang', 'id');
    }
}
