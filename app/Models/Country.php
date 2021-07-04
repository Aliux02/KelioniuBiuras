<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $fillable = ['title', 'description', 'distance'];

    public function towns(){
        return $this->hasMany('App\Models\Town');
    }

    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }


}
