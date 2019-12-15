<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public $timestamps = false;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function boxes()
    {
        return $this->hasMany('App\Box', 'id', 'category_id');
    }
}
