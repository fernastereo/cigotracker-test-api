<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PENDING_ORDER = 1;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'scheduleddate',
        'streetaddress',
        'city_id',
        'zipcode',
        'statusorder_id',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function statusorder(){
        return $this->belongsTo(Statusorder::class);
    }
}
