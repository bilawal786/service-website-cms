<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Image;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.services.services', compact('services'));
    }

    public function create()
    {
        return view('backend.services.createservice');
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->icon = $request->icon;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->title1 = $request->title1;
        $service->title2 = $request->title2;
        $service->title3 = $request->title3;
        $service->title4 = $request->title4;
        $service->heading = $request->heading;
        $service->subheading = $request->subheading;
        $service->description = $request->description;
        $service->feature1 = $request->feature1;
        $service->feature1detail = $request->feature1detail;
        $service->feature2 = $request->feature2;
        $service->feature2detail = $request->feature2detail;
        $service->feature3 = $request->feature3;
        $service->feature3detail = $request->feature3detail;
        if ($request->hasfile('image')) {
            //code to remove old file
            if ($service->image) {
                $file_old = $service->image;
                if ($file_old != 'frontend/assets/images/breadcrumb/img-2.jpg') {
                    unlink($file_old);
                }
            }

            $newimage = $request->file('image');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'serviceImages/';
            $newimage->move($destinationPath, $name);
            $service->image = 'serviceImages/' . $name;

            //Resize image
            $path = public_path('serviceImages/' . $name);
            $img = Image::make($path)->resize(700, 415)->save($path);
        }


        $otherimages = array();
        if ($files = $request->file('otherimages')) {
            foreach ($files as $file) {
                $name = uniqid() . 'img' . '.' . $file->getClientOriginalExtension();
                $destinationPath = 'serviceImages/';
                $file->move($destinationPath, $name);
                $otherimages[] = 'serviceImages/' . $name;

                //Resize image
                $path = public_path('serviceImages/' . $name);
                $img = Image::make($path)->resize(370, 370)->save($path);
            }
            $images = implode(',', $otherimages);
            $service->otherimages = $images;
        }
        $service->save();
        return redirect('/services')->with('success', 'Service Created Successfully');
    }


    public function editservice(Request $request, $id)
    {
        $service = Service::find($id);
        return view('backend.services.editservice', compact('service'));
    }


    public function updateservice(Request $request, $id)
    {

        $service = Service::find($id);
        $service->icon = $request->icon;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->title1 = $request->title1;
        $service->title2 = $request->title2;
        $service->title3 = $request->title3;
        $service->title4 = $request->title4;
        $service->heading = $request->heading;
        $service->subheading = $request->subheading;
        $service->description = $request->description;
        $service->feature1 = $request->feature1;
        $service->feature1detail = $request->feature1detail;
        $service->feature2 = $request->feature2;
        $service->feature2detail = $request->feature2detail;
        $service->feature3 = $request->feature3;
        $service->feature3detail = $request->feature3detail;
        if ($request->hasfile('image')) {
            //code to remove old file
            if ($service->image) {
                $file_old = $service->image;
                if ($file_old != 'frontend/assets/images/breadcrumb/img-2.jpg') {
                    unlink($file_old);
                }
            }

            $newimage = $request->file('image');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'serviceImages/';
            $newimage->move($destinationPath, $name);
            $service->image = 'serviceImages/' . $name;

            //Resize image
            $path = public_path('serviceImages/' . $name);
            $img = Image::make($path)->resize(700, 415)->save($path);
        }


        $otherimages = array();
        if ($files = $request->file('otherimages')) {
            //code to remove old otherimages
            $im_images = $service->otherimages;
            $images = explode(',', $im_images);
            foreach ($images as $image) {
                unlink($image);
            }

            foreach ($files as $file) {
                $name = uniqid() . 'img' . '.' . $file->getClientOriginalExtension();
                $destinationPath = 'serviceImages/';
                $file->move($destinationPath, $name);
                $otherimages[] = 'serviceImages/' . $name;

                //Resize image
                $path = public_path('serviceImages/' . $name);
                $img = Image::make($path)->resize(370, 370)->save($path);
            }

            $newimages = implode(',', $otherimages);
            $service->otherimages = $newimages;
        }
        $service->save();
        return redirect('/services')->with('success', 'Service Updated Successfully');
    }


    public function deleteservice(Request $request, $id)
    {
        $service = Service::find($id);
        $service->delete();
        $old_image = $service->image;
        if ($old_image) {
            unlink($old_image);
        }

        //code to remove old otherimages
        if ($service->otherimages) {
            $im_images = $service->otherimages;
            $images = explode(',', $im_images);
            foreach ($images as $image) {
                unlink($image);
            }
        }

        return redirect('/services')->with('danger', 'Service Deleted Successfully');
    }


}
