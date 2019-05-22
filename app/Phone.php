<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['id'];

    public function customer(){

        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function Activate(){


    }
}
