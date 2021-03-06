<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='product_id';
    public function stock(){
        return $this->hasOne('\App\Stock','products_id');
    }
    public function receive(){
        return $this->hasOne('\App\Receive','products_id');
    }
}
