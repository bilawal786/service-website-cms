<?php

namespace App\Http\Controllers\Backend;

use App\Setting;
use App\WebsiteImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::first();
        return view('backend.settings.generalSettings',compact('settings'));
    }

    public function update(Request $request){
        $settings = Setting::first();
        $settings->aboutus = $request->aboutus;
        $settings->address = $request->address;
        $settings->email1 = $request->email1;
        $settings->email2 = $request->email2;
        $settings->number1 = $request->number1;
        $settings->number2 = $request->number2;
        if($request->hasfile('image') ){
            //code to remove old file
            if($settings->image){
            $file_old = $settings->image;
            if($file_old != 'frontend/assets/images/logo/logo-1.png'){
            unlink($file_old);}}

           $image1 = $request->file('image');
           $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'images/';
           $image1->move($destinationPath, $name);
           $settings->image = 'images/' . $name;

           //Resize image
           $path = public_path('images/'.$name);
           $img = Image::make($path)->resize(157,44)->save($path);
       }
           $settings->save();
       return redirect('/generalSettings')->with('success','Settings updated successfully');

    }


    public function websiteImages(){
        $websiteImages = WebsiteImage::first();
        return view('backend.settings.websiteImages',compact('websiteImages'));
    }


    public function updateWebsiteImages(Request $request){
        $websiteImages = WebsiteImage::first();

            if($request->hasfile('image1') ){
            //code to remove old file
            if($websiteImages->image1){
            $file_old = $websiteImages->image1;
            if($file_old != 'frontend/assets/images/hero/hero-one-img-2.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image1');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image1 = 'websiteImages/' . $name;

            //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(495,690)->save($path);
            }
            if($request->hasfile('image2') ){
            //code to remove old file
            if($websiteImages->image2){
            $file_old = $websiteImages->image2;
            if($file_old != 'frontend/assets/images/about/about-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image2');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image2 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(500,712)->save($path);
            }
            if($request->hasfile('image3') ){
            //code to remove old file
            if($websiteImages->image3){
            $file_old = $websiteImages->image3;
            if($file_old != 'frontend/assets/images/cta/img-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image3');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image3 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(643,303)->save($path);
            }
            if($request->hasfile('image4') ){
            //code to remove old file
            if($websiteImages->image4){
            $file_old = $websiteImages->image4;
            if($file_old != 'frontend/assets/images/testimonial/img-3.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image4');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image4 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(220,275)->save($path);
            }
            if($request->hasfile('image5') ){
            //code to remove old file
            if($websiteImages->image5){
            $file_old = $websiteImages->image5;
            if($file_old != 'frontend/assets/images/testimonial/img-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image5');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image5 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(434,619)->save($path);
            }
            if($request->hasfile('image6') ){
            //code to remove old file
            if($websiteImages->image6){
            $file_old = $websiteImages->image6;
            if($file_old != 'frontend/assets/images/contact/contact-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image6');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image6 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(370,590)->save($path);
            }
            if($request->hasfile('image7') ){
            //code to remove old file
            if($websiteImages->image7){
            $file_old = $websiteImages->image7;
            if($file_old != 'frontend/assets/images/logo/footer-logo-1.png'){
            unlink($file_old);}}

            $newimage = $request->file('image7');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'websiteImages/';
            $newimage->move($destinationPath, $name);
            $websiteImages->image7 = 'websiteImages/' . $name;

             //Resize image
           $path = public_path('websiteImages/'.$name);
           $img = Image::make($path)->resize(356,78)->save($path);
            }


        $websiteImages->save();
       return redirect('/website-images')->with('success','Images updated successfully');
    }
}




// protected $table = 'website_images';
//     protected $fillable = ['image1','image2','image3','image4','image5','image6','image7'];
