<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OurWorks extends Model
{
    protected $table="ourworks";
    protected $fillable=['id','img','work_name','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
