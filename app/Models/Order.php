<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    function project(){
        return $this->belongsTo('App\Models\Project','id','order_id');
    }
}
