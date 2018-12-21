<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function customers(){
        return $this->hasMany(Customer::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
