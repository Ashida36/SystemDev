<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey='stock_id';
    public function product(){
        return $this->belongsTo('\App\Product','products_id');
    }
    public function receive(){
        return $this->hasOne('\App\Receive','receive_id');
    }
}
