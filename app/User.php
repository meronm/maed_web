<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;

    public function hotels(){
        return $this->hasMany(Hotel::class);
    }
}
