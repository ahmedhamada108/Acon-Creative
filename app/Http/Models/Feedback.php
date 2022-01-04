<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table="feedback";
    protected $fillable=['id','name','job','img','feedback','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}
