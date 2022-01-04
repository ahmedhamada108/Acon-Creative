<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Models\Content;
use App\Http\Models\Features;
use App\Http\Models\Feedback;
use App\Http\Models\OurWorks;
use App\Http\Models\Sercices;
use App\Providers\RouteServiceProvider;
use App\User;
use Faker\Core\File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class adminpanelController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ##############################################   Dashboard   ######################################################
   public function dashboard(){
        $Services=Sercices::all()->count();
        return view('AdminPanel.dashboard',compact('Services'));
    }
    ############################################ Manage Services ######################################################

                                     ############# Display the view  ##########
    public function manageservices(){
        $Allservices= Sercices::all();
       return view('AdminPanel.services',compact('Allservices'));
    }

                                     ############# Add New Service ############
    public function AddNew(Request $request){
        $rules=[
            'name_ar'=>'max:255|unique:services,name_ar',
            'name_en'=>'max:255|unique:services,name_en',
            'content_ar'=>'max:1000',
            'content_en'=>'max:1000'
        ];
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        Sercices::create([
            'name_ar'=>$request-> name_ar,
            'name_en'=>$request-> name_en,
            'content_ar'=>$request-> contentar,
            'content_en'=>$request-> contenten,

        ]);
        return redirect()->back()->with(['success1'=>'The service has been added successfully']);

    }
                                    ############# Get Service By Id ##########
    public function GetServiceById($id){
        $Service= Sercices::find($id);
    }
                                     ############# Update Service  ##########
    public function UpdateService(Request $request,$id){

        $update= Sercices::find($id);
        $update->name_ar = $request->editnameAR;
        $update->name_en = $request->editnameEN;
        $update->content_ar = $request->editcontentarr;
        $update->content_en = $request->editcontentenn;
        $update->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
                                     ############# Delete Service  ##########
    public function DeleteService($id){
        Sercices::destroy($id);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);
    }

    ########################################### the main content ######################################################

                                 ############# Display the view  ##########
    public function maincontent(){
        $Content=Content::all();
        return view('AdminPanel.maincontent',compact('Content'));
    }
                                 ############# Update Service  ############
    public function UpdateHeroContain(Request $request){

        $updatehero= Content::find(1);
        $updatehero->hero_content1_ar = $request->contentfirstsliderAR;
        $updatehero->hero_content1_en = $request->contentfirstsliderEN;
        $updatehero->hero_content2_ar = $request->contentsecondsliderAR;
        $updatehero->hero_content2_en = $request->contentsecondsliderEN;
        $updatehero->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }

    ########################################### Manage Our services ###################################################

                                     ############# Display the view  ##########
    public function ourservices(){
        $Ourservices=Content::all();
        $features=Features::all();
        return view('AdminPanel.ourservice',compact(['Ourservices','features']));
    }
                                     ############# Update the content of sections ##########
    public function Updateourservice1(Request $request){

        $updatesevice1= Content::find(1);
        $updatesevice1->ourservice1_ar = $request->ourservice1AR;
        $updatesevice1->ourservice1_en = $request->ourservice1EN;
        $updatesevice1->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
    public function Updateourservice2(Request $request){

        $updatesevice2= Content::find(1);
        $updatesevice2->ourservice2_ar = $request->ourservice2AR;
        $updatesevice2->ourservice2_en = $request->ourservice2EN;
        $updatesevice2->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
    public function Updateourservice3(Request $request){

        $updatesevice3= Content::find(1);
        $updatesevice3->ourservice3_ar = $request->ourservice3AR;
        $updatesevice3->ourservice3_en = $request->ourservice3EN;
        $updatesevice3->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
                                        ############# Add New Feature ############
    public function AddNewFeature(Request $request){
        $rules=[
            'feature_ar'=>'max:255|unique:features,feature_ar',
            'feature_en'=>'max:255|unique:features,feature_ar'
        ];
        $validator1= Validator::make($request->all(),$rules);
        if($validator1->fails()){
            return redirect()->back()->withErrors($validator1)->withInputs($request->all());
        }
        Features::create([
            'feature_ar'=>$request-> feature_ar,
            'feature_en'=>$request-> feature_en,

        ]);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);

    }
                                        ############# Get feature By Id ##########
    public function GetFeatureById($id){
        $Feature= Features::find($id);
    }
                                         ############# Update Feature  ##########
    public function UpdateFeature(Request $request,$id){

        $update_feature= Features::find($id);
        $update_feature->feature_ar = $request->edit_featureAR;
        $update_feature->feature_en = $request->edit_featureEN;
        $update_feature->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
                                        ############# Delete Feature ##########
    public function DeleteFeature($id){
        Features::destroy($id);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);
    }

    ########################################### About Us ##############################################################
    public function manageaboutus(){
        $AboutContent=Content::all();
        return view('AdminPanel.aboutus',compact('AboutContent'));
    }
    public function Updateaboutus(Request $request){

        $updateaboutus= Content::find(1);
        $updateaboutus->AboutSection_ar = $request->aboutussectionAR;
        $updateaboutus->AboutSection_en = $request->aboutussectionEN;
        $updateaboutus->About_ar = $request->aboutuspageAR;
        $updateaboutus->About_en = $request->aboutuspageEN;
        $updateaboutus->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }

    ########################################### the Our Works #########################################################
    public function manageourworks(){
        $works=OurWorks::all();
        return view('AdminPanel.ourworks',compact('works'));
    }
    public function AddNewWork(Request $request){
        $rules=[
            'work_name'=>'max:255|unique:ourworks,work_name',
        ];
        $validator1= Validator::make($request->all(),$rules);
        if($validator1->fails()){
            return redirect()->back()->withErrors($validator1)->withInputs($request->all());
        }
        $file = $request->file('file');
        if($request->hasFile('file')) {

            $file_extension = $request->file->getClientOriginalExtension();
            $img_name = time(). '.' . $file_extension;
            $path = 'public/images';
            $request->file->move($path, $img_name);
            $file = $path . '/' . $img_name;
        }
        OurWorks::create([
            'work_name'=>$request-> name_work,
            'img'=>$img_name,

        ]);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);

    }
    public function GetOurWorksById($id){
        $ourworks= OurWorks::find($id);
    }
    public function Deletework($id){
        OurWorks::destroy($id);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);
    }

    public function UpdateWorks(Request $request,$id){
        $update_work= OurWorks::find($id);
        $file = $request->file('file');
        if($request->hasFile('file')) {

            $file_extension = $request->file->getClientOriginalExtension();
            $img_name = time(). '.' . $file_extension;
            $path = 'public/images';
            $request->file->move($path, $img_name);
            $file = $path . '/' . $img_name;
            $update_work->work_name = $request->editnamework;
            $update_work->img=$img_name;
            $update_work->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);

        }else{
            $update_work->work_name = $request->editnamework;
            $update_work->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);

        }


    }

    ########################################### Feedback ##############################################################
    public function feedback(){
        $feedback=Feedback::all();
        return view('AdminPanel.feedback',compact('feedback'));
    }
    public function AddNewFeedback(Request $request){
        $rules=[
            'feedback'=>'max:255|unique:feedback,feedback',
        ];
        $validator1= Validator::make($request->all(),$rules);
        if($validator1->fails()){
            return redirect()->back()->withErrors($validator1)->withInputs($request->all());
        }
        $file = $request->file('file');
        if($request->hasFile('file')) {

            $file_extension = $request->file->getClientOriginalExtension();
            $img_name = time(). '.' . $file_extension;
            $path = 'public/images';
            $request->file->move($path, $img_name);
            $file = $path . '/' . $img_name;
            Feedback::create([
                'name'=>$request-> name_feedback,
                'job'=>$request-> job_feedback,
                'feedback'=>$request-> feedback,
                'img'=>$img_name,

            ]);
            return redirect()->back()->with(['success'=>'The service has been added successfully']);
        }else{
            $avatar='avatar.webp';
            Feedback::create([
                'name'=>$request-> name_feedback,
                'job'=>$request-> job_feedback,
                'feedback'=>$request-> feedback,
                'img'=>$avatar,

            ]);
            return redirect()->back()->with(['success'=>'The service has been added successfully']);
        }


    }
    public function GetFeedbackById($id){
        $feedback= Feedback::find($id);
    }
    public function DeleteFeedback($id){
        Feedback::destroy($id);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);
    }

    public function UpdateFeedback(Request $request,$id){
        $update_feedback= Feedback::find($id);
        $file = $request->file('file');
        if($request->hasFile('file')) {

            $file_extension = $request->file->getClientOriginalExtension();
            $img_name = time(). '.' . $file_extension;
            $path = 'public/images';
            $request->file->move($path, $img_name);
            $file = $path . '/' . $img_name;

            $update_feedback->name = $request->editname_feedback;
            $update_feedback->job = $request->editjob_feedback;
            $update_feedback->feedback = $request->editfeedback;

            $update_feedback->img=$img_name;
            $update_feedback->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);

        }else{
            $update_feedback->name = $request->editname_feedback;
            $update_feedback->job = $request->editjob_feedback;
            $update_feedback->feedback = $request->editfeedback;
            $update_feedback->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);

        }


    }
    ########################################### Contact info ##########################################################
    public function contactinfo(){
        $Contact=Content::all();
        return view('AdminPanel.contactus',compact('Contact'));
    }
    public function Updatecontact(Request $request){

        $updatecontact= Content::find(1);
        $updatecontact->WhatsApp = $request->WhatsApp;
        $updatecontact->Telegram = $request->telegram;
        $updatecontact->Phone_Number = $request->phone;
        $updatecontact->Email = $request->email;
        $updatecontact->Facebook_URL = $request->FBurl;
        $updatecontact->Twitter_URL = $request->Twitter;

        $updatecontact->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }

    ########################################### privacy policy ########################################################
    public function privacy(){
        $privacy=Content::all();
        return view('AdminPanel.privacy',compact('privacy'));
    }
    public function Updateprivacy(Request $request){

        $updateprivacy= Content::find(1);
        $updateprivacy->privacy_ar = $request->pivacysectionAR;
        $updateprivacy->privacy_en = $request->privacysectionEN;
        $updateprivacy->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }

    ########################################### terms of use ##########################################################
    public function terms(){
        $terms=Content::all();
        return view('AdminPanel.terms',compact('terms'));
    }
    public function Updateterms(Request $request){

        $updateterms= Content::find(1);
        $updateterms->terms_ar = $request->termssectionAR;
        $updateterms->terms_en = $request->termssectionEN;
        $updateterms->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);

    }
    ########################################### Manage the admins #####################################################
    public function admins(){
        $data_admin=User::all();
        return view('AdminPanel.admins',compact('data_admin'));
    }
    public function AddNewAdmin(Request $request){
        $rules=[
            'email'=>'max:255|unique:users,email',
        ];
        $validator2= Validator::make($request->all(),$rules);
        if($validator2->fails()){
            return redirect()->back()->withErrors($validator2)->withInputs($request->all());
        }
        if($request->passwordadmin==$request->conpasswordadmin){
            User::create([
                'name'=>$request->nameadmin,
                'email'=>$request->emailadmin,
                'password'=>Hash::make($request->passwordadmin),

            ]);
            return redirect()->back()->with(['success'=>'The service has been added successfully']);
        }else{
            return redirect()->back()->with(['faild'=>'faild added']);

        }

    }
    public function GetAdminsById($id){
        $admins= User::find($id);
    }
    public function DeleteAdmin($id){
        User::destroy($id);
        return redirect()->back()->with(['success'=>'The service has been added successfully']);
    }
    public function UpdateAdmin(Request $request,$id){
        $update_Admin= User::find($id);
        $update_Admin->name = $request->editnameadmin;
        $update_Admin->email = $request->editemailadmin;
        $update_Admin->password =Hash::make($request->editpasswordadmin);
        $update_Admin->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }

}
