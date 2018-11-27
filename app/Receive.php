<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    protected $primaryKey='receive_id';
    public function product(){
        return $this->belongsTo('\App\Product','products_id');
    }
}
