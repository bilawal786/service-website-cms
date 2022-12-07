<?php

namespace App\Http\Controllers\Frontend;

use App\Query;
use App\Setting;
use App\Service;
use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;


class FrontendController extends Controller
{
    public function index()
    {

        return view('frontend.index');


    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function servicedetails(Request $request, $id)
    {
        $service = Service::find($id);
        return view('frontend.servicedetails', compact('service'));
    }

    public function projectdetails($id)
    {
        $project = Project::find($id);
        return view('frontend.projectdetails', compact('project'));
    }

    public function emailquery(Request $request)
    {
        $details['email'] = $request->email;
        $details['adminemail'] = $request->adminemail;
        dispatch(new SendEmailJob($details));
        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->service = $request->service;
        $query->message = $request->message;
        $query->status = 0;
        $query->save();
        return redirect('/');
    }

    public function emailqueryservice(Request $request)
    {
        $details['email'] = $request->email;
        $details['adminemail'] = $request->adminemail;
        dispatch(new SendEmailJob($details));
        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->service = $request->service;
        $query->message = $request->message;
        $query->save();
        $serviceid = $request->serviceid;
        return redirect('service-details/'.$serviceid );
    }

}
