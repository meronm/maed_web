<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
