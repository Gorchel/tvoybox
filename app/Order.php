<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // public $timestamps = false;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
