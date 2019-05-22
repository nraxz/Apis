<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['id'];

    public function phones(){

        return $this->hasMany(Phone::class);
    }
}
