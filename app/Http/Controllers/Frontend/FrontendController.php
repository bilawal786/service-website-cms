<?php

namespace App\Http\Controllers\Frontend;

use App\Setting;
use App\Service;
use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index');


    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.about');
    }

    public function servicedetails(Request $request,$id){
        $service = Service::find($id);
        return view('frontend.servicedetails',compact('service'));
    }

    public function projectdetails($id){
        $project = Project::find($id);
        return view('frontend.projectdetails',compact('project'));
    }

}
