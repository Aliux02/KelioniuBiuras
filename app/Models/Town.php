<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    public $fillable = ['title', 'population', 'country_id'];

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

}
