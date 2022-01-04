<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $table='features';
    protected $fillable=['feature_ar','feature_en','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
