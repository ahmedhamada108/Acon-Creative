<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Models\Content;
use App\Http\Models\Features;
use App\Http\Models\Feedback;
use App\Http\Models\OurWorks;
use App\Http\Models\Sercices;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Website'],function() {
    Route::get('/',function (){
        $allcontent=Content::all();
        $allworks=OurWorks::all();
        $allservices=Sercices::all();
        $allfeedback=Feedback::all();
        $allfeature=Features::all();
        return ( view('Website.Home',compact(['allcontent','allfeature','allworks','allfeedback','allservices'])));

    });
    Route::get('/ar','websiteController@index');
    Route::get('/en','websiteController@index');
    Route::get('/AboutUsEN','websiteController@aboutus');
    Route::get('/AboutUsAR','websiteController@aboutus');

    Route::get('/TermsAR','websiteController@terms');
    Route::get('/TermsEN','websiteController@terms');
    Route::get('/PrivacPolicyAR','websiteController@privacy');
    Route::get('/PrivacPolicyEN','websiteController@privacy');
    Route::get('/{name_en}AR','websiteController@SinglePage')->name('single.page');
    Route::get('/{name_en}EN','websiteController@SinglePage')->name('single.page');

});
