<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Image;
use App\CategoryProjectModel;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();
        return view('backend.projects.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.createproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->heading1 = $request->heading1;
        $project->description1 = $request->description1;
        $project->heading2 = $request->heading2;
        $project->description2 = $request->description2;
        $project->categoryid = $request->categoryid;
        $project->serviceid = $request->serviceid;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->location = $request->location;
        $project->summarydescription = $request->summarydescription;

        if($request->hasfile('image') ){
            //code to remove old file
            if($project->image){
            $file_old = $project->image;
            if($file_old != 'frontend/assets/images/portfolio/img-1.jpg'){
            unlink($file_old);}}

           $newimage = $request->file('image');
           $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
           $destinationPath = 'projectImages/';
           $newimage->move($destinationPath, $name);
           $project->image = 'projectImages/' . $name;

           //Resize image
           $path = public_path('projectImages/'.$name);
           $img = Image::make($path)->resize(370,370)->save($path);
       }

            if($request->hasfile('image1') ){
            //code to remove old file
            if($project->image1){
            $file_old = $project->image1;
            if($file_old != 'frontend/assets/images/breadcrumb/img-3.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image1');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'projectImages/';
            $newimage->move($destinationPath, $name);
            $project->image1 = 'projectImages/' . $name;

            //Resize image
            $path = public_path('projectImages/'.$name);
            $img = Image::make($path)->resize(670,405)->save($path);
        }

        if($request->hasfile('image2') ){
            //code to remove old file
            if($project->image2){
            $file_old = $project->image2;
            if($file_old != 'frontend/assets/images/portfolio/single-img-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image2');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'projectImages/';
            $newimage->move($destinationPath, $name);
            $project->image2 = 'projectImages/' . $name;

            //Resize image
            $path = public_path('projectImages/'.$name);
            $img = Image::make($path)->resize(1170,585)->save($path);
        }
        $project->save();
        return redirect('project')->with('success','Project Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

        $project = Project::find($id);
        return view('backend.projects.editproject',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->name;
        $project->heading1 = $request->heading1;
        $project->description1 = $request->description1;
        $project->heading2 = $request->heading2;
        $project->description2 = $request->description2;
        $project->categoryid = $request->categoryid;
        $project->serviceid = $request->serviceid;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->location = $request->location;
        $project->summarydescription = $request->summarydescription;
        if($request->hasfile('image') ){
            //code to remove old file
            if($project->image){
            $file_old = $project->image;
            if($file_old != 'frontend/assets/images/portfolio/img-1.jpg'){
            unlink($file_old);}}

           $newimage = $request->file('image');
           $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
           $destinationPath = 'projectImages/';
           $newimage->move($destinationPath, $name);
           $project->image = 'projectImages/' . $name;

           //Resize image
           $path = public_path('projectImages/'.$name);
           $img = Image::make($path)->resize(370,370)->save($path);
       }

            if($request->hasfile('image1') ){
            //code to remove old file
            if($project->image1){
            $file_old = $project->image1;
            if($file_old != 'frontend/assets/images/breadcrumb/img-3.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image1');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'projectImages/';
            $newimage->move($destinationPath, $name);
            $project->image1 = 'projectImages/' . $name;

            //Resize image
            $path = public_path('projectImages/'.$name);
            $img = Image::make($path)->resize(670,405)->save($path);
        }

        if($request->hasfile('image2') ){
            //code to remove old file
            if($project->image2){
            $file_old = $project->image2;
            if($file_old != 'frontend/assets/images/portfolio/single-img-1.jpg'){
            unlink($file_old);}}

            $newimage = $request->file('image2');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'projectImages/';
            $newimage->move($destinationPath, $name);
            $project->image2 = 'projectImages/' . $name;

            //Resize image
            $path = public_path('projectImages/'.$name);
            $img = Image::make($path)->resize(1170,585)->save($path);
        }
        $project->save();
        return redirect('project')->with('success','Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $project = Project::find($id);
        $project->delete();

        if($image = $project->image){
        unlink($image);}

        if($image1 = $project->image1){
        unlink($image1);}

        if($image2 = $project->image2){
            unlink($image2);}

     return redirect('project')->with('danger','Project Deleted Successfully');
    }

}
