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
use App\Http\Models\Sercices;
use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/admin/login',function (){
    return view('AdminPanel.login');
})->name('login');
Route::post('/admin/login','Auth\LoginController@login');
#######################################################################

Route::get('admin/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin','namespace'=>'AdminPanel','middleware' => ['web']],function(){
#######################################  The Routes of Views ###########################################################
    Route::get("/Dashboard","adminpanelController@dashboard")->name('dashboard');
    Route::get("/Services","adminpanelController@manageservices")->name('services');
    Route::get("/MainContent","adminpanelController@maincontent")->name('maincontent');
    Route::get("/OurServices","adminpanelController@ourservices")->name('ourservices');
    Route::get("/AboutUs","adminpanelController@manageaboutus")->name('aboutus');
    Route::get("/OurWorks","adminpanelController@manageourworks")->name('ourworks');
    Route::get("/Feedback","adminpanelController@feedback")->name('feedback');
    Route::get("/ContactInfo","adminpanelController@contactinfo")->name('contactinfo');
    Route::get("/PrivacyPolice","adminpanelController@privacy")->name('privacypolice');
    Route::get("/TermsOfUse","adminpanelController@terms")->name('terms');
    Route::get("/ManageAdmins","adminpanelController@admins")->name('admins');
#######################################  The Routes of Views ###########################################################

#################################  The Routes of Views Operations ######################################################

                                   ##################### services ##################
    Route::post('/Services/add','adminpanelController@AddNew')->name('add');
    Route::get('Services/edit/{id}','adminpanelController@GetServiceById')->name('GetId');
    Route::post('/Services/Edit/{id}','adminpanelController@UpdateService')->name('update.service');
    Route::get('/Services/delete/{id}','adminpanelController@DeleteService')->name('delete.service');
                                   ##################### services ##################

                                   ##################### Hero contain ##################
    Route::post('/MainContent/update','adminpanelController@UpdateHeroContain')->name('update.heroSection');
                                   ##################### Hero contain ##################

                                   ################ Our Services Section ###############
    Route::post('/OurServices/EditSection1','adminpanelController@Updateourservice1')->name('edit.ourservice1');
    Route::post('/OurServices/EditSection2','adminpanelController@Updateourservice2')->name('edit.ourservice2');
    Route::post('/OurServices/EditSection3','adminpanelController@Updateourservice3')->name('edit.ourservice3');

    Route::post('/OurServices/add','adminpanelController@AddNewFeature')->name('add.feature');
    Route::post('/OurServices/editfeature/{id}','adminpanelController@UpdateFeature')->name('edit.feature');
    Route::get('/OurServices/EditFeature/{id}','adminpanelController@GetFeatureById')->name('feature.id');
    Route::get('/OurServices/DeleteFeatures/{id}','adminpanelController@DeleteFeature')->name('delete.feature');
                                     ################ Our Services Section ###############

                                    ################ About Us Section and page ###############
    Route::post('/AboutUs/edit','adminpanelController@Updateaboutus')->name('update.aboutus');
                                    ################ About Us Section and page ###############

                                                ################ Our Works ###############
    Route::post('/OurWorks/add','adminpanelController@AddNewWork')->name('add.work');
    Route::get('/OurWorks/EditWorks/{id}','adminpanelController@GetOurWorksById')->name('editwork.id');
    Route::get('OurWorks/delete/{id}','adminpanelController@Deletework')->name('work.delete');
    Route::post('/OurWorks/edit/{id}','adminpanelController@UpdateWorks')->name('work.edit');
                                                 ################ Our Works ###############

                                                 ################ FeedBack ###############
    Route::post('/Feedback/add','adminpanelController@AddNewFeedback')->name('add.feed');
    Route::get('/Feedback/EditFeedback/{id}','adminpanelController@GetFeedbackById')->name('editfeedback.id');
    Route::get('/Feedback/delete/{id}','adminpanelController@DeleteFeedback')->name('feedback.delete');
    Route::post('/Feedback/edit/{id}','adminpanelController@UpdateFeedback')->name('feedback.edit');
                                                ################ FeedBack ###############

                                                ################ Contact Info #############
    Route::post('/ContactInfo/Edit','adminpanelController@Updatecontact')->name('edit.contact');
                                                ################ Contact Info #############
    ################ Privacy Policy #############
    Route::post('/PrivacyPolicy/Edit','adminpanelController@Updateprivacy')->name('update.privacy');
    ################ Privacy Policy #############
    ################ Terms Of Use #############
    Route::post('/TermsOfUse/Edit','adminpanelController@Updateterms')->name('update.terms');
    ################ Terms Of Use #############
    ################ Admins #############
    Route::post('/admins/add','adminpanelController@AddNewAdmin')->name('add.admin');
    Route::get('/admins/edit/{id}','adminpanelController@GetAdminsById')->name('editadmin.id');
    Route::get('/admins/delete/{id}','adminpanelController@DeleteAdmin')->name('admin.delete');
    Route::post('/admins/Edit/{id}','adminpanelController@UpdateAdmin')->name('edit.admin');
    ################ Terms Of Use #############


##################################  The Routes of Views Operations #####################################################
});
