<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey='order_id';
    public function receive(){
        return $this->hasOne('\App\Receive','orders_id');
    }
}
