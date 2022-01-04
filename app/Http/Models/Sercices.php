<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Sercices extends Model
{
    protected $table="services";
    protected $fillable = ['id','name_ar','name_en','content_ar','content_en','created_at','updated_at'];
    protected $hidden=['updated_at','created_at'];


}
