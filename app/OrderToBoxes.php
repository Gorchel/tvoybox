<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderToBoxes extends Model
{
    public $timestamps = false;

    protected $table = 'order_to_boxes';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
