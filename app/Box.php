<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    // public $timestamps = false;

    protected $table = 'boxes';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
