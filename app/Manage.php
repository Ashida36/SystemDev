<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $primaryKey='manage_id';
    public function payment(){
        return $this->hasOne('\App\Payment','manages_id');
    }
}
