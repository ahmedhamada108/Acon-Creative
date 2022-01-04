<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table="content";
    protected $fillable = ['id','hero_content1_ar','hero_content1_en','hero_content2_ar','	hero_content2_en','ourservice1_ar','ourservice1_en','ourservice2_ar','ourservice2_en','ourservice3_ar','ourservice3_en','AboutSection_ar','AboutSection_en','About_ar','About_en','WhatsApp','Telegram','Phone_Number','Email','Facebook_URL','Twitter_URL','privacy_ar','privacy_en','terms_ar','terms_en','created_at','updated_at'];
    protected $hidden=['updated_at','created_at'];
}
