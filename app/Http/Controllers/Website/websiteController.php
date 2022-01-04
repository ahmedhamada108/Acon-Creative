<?php

namespace App\Http\Controllers\Website;

use App\Http\Models\Content;
use App\Http\Models\Features;
use App\Http\Models\Feedback;
use App\Http\Models\OurWorks;
use App\Http\Models\Sercices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class websiteController extends BaseController
{
    public function index()
    {
        $allcontent=Content::all();
        $allworks=OurWorks::all();
        $allservices=Sercices::all();
        $allfeedback=Feedback::all();
        $allfeature=Features::all();
        return view('Website.Home',compact(['allcontent','allfeature','allworks','allfeedback','allservices']));
    }
    public function aboutus(){
        $allservices=Sercices::all();
        $allcontent=Content::all();
        return view('Website.AboutUs',compact(['allcontent','allservices']));
    }
    public function terms(){
        $allservices=Sercices::all();
        $allcontent=Content::all();
        return view('Website.terms',compact (['allcontent','allservices']));
    }
    public function privacy(){
        $allservices=Sercices::all();
        $allcontent=Content::all();
        return view('Website.Privacy',compact (['allcontent','allservices']));
    }
    public function SinglePage($name_en)
    {
        $allservices = Sercices::all();
        $allcontent = Content::all();
        $Services1 = Sercices::all()->where('name_en',$name_en);
        return view('Website.SinglePage',compact(['allservices','allcontent','Services1']));
    }
}
