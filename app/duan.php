<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duan extends Model
{
    protected $table = 'duan';
    public function huyen()
    {
        return $this->belongsTo('App\district', 'd_iddistrict', 'id');
    }
    public function tinh()
    {
        return $this->belongsTo('App\province', 'd_idprovince', 'id');
    }
}
