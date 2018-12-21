<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        public function hotel(){
            return $this->belongsTo(Hotel::class);
        }

        public function customer(){
            return $this->belongsTo(Customer::class);
        }

        public function menu(){
            return $this->belongsTo(Menu::class);
        }
}
