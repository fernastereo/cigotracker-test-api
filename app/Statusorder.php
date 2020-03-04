<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusorder extends Model
{
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
