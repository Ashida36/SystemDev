<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    protected $primaryKey='send_id';
    public function stock(){
        return $this->belongsTo('\App\Stock','stocks_id');
    }
}
