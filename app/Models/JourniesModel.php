<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourniesModel extends Model
{
    protected $table= "journies";
    use HasFactory;

    // public function getCountry()
    // {
    //     return $this->belongsTo('App\Models\CountryModel','country_id');
    // }
    // public function getUser()
    // {
    //     return $this->belongsTo('App\Models\User','user_id');
    // }
    // public function getImage()
    // {
    //     return $this->belongsTo('App\Models\ImageModel','image_id');
    // }
}
