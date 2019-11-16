<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = 'danhmuc';
    public function parent()
    {
        return $this->belongsTo('App\danhmuc', 'd_idparent');
    }
 
    public function children()
    {
        return $this->hasMany('App\danhmuc', 'd_idparent');
    }
}
