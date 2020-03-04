<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function statusorder(){
        return $this->belongsTo(Statusorder::class);
    }
}
