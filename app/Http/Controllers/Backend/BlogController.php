<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('backend.blogs.blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.createblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->fDescription = $request->fDescription;
        $blog->date = $request->date;
        $blog->categoryid = $request->categoryid;
        $blog->heading = $request->heading;
        $blog->description = $request->description;
        $blog->author = $request->author;
        if($request->hasfile('fImage') ){
            //code to remove old file
            if($file_old = $blog->fImage){
                if($file_old != 'frontend/assets/images/blog/img-1.jpg'){
                    unlink($file_old);}}

            $newimage = $request->file('fImage');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'blogImages/';
            $newimage->move($destinationPath, $name);
            $blog->fImage = 'blogImages/' . $name;

            //Resize image
            $path = public_path('blogImages/'.$name);
            $img = Image::make($path)->resize(370,250)->save($path);
        }
        if($request->hasfile('image') ){
            //code to remove old file
            if($file_old = $blog->image){
                if($file_old != 'frontend/assets/images/blog/blog-single-1.jpg'){
                    unlink($file_old);}}

            $newimage = $request->file('image');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'blogImages/';
            $newimage->move($destinationPath, $name);
            $blog->image = 'blogImages/' . $name;

            //Resize image
            $path = public_path('blogImages/'.$name);
            $img = Image::make($path)->resize(770,505)->save($path);
        }
        $blog->save();
        return redirect('/blogs')->with('success','Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $blog = Blog::find($id);
        return view('backend.blogs.editblog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->fDescription = $request->fDescription;
        $blog->date = $request->date;
        $blog->categoryid = $request->categoryid;
        $blog->heading = $request->heading;
        $blog->description = $request->description;
        $blog->author = $request->author;
        if($request->hasfile('fImage') ){
            //code to remove old file
            if($file_old = $blog->fImage){
                if($file_old != 'frontend/assets/images/blog/img-1.jpg'){
                    unlink($file_old);}}

            $newimage = $request->file('fImage');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'blogImages/';
            $newimage->move($destinationPath, $name);
            $blog->fImage = 'blogImages/' . $name;

            //Resize image
            $path = public_path('blogImages/'.$name);
            $img = Image::make($path)->resize(370,250)->save($path);
        }
        if($request->hasfile('image') ){
            //code to remove old file
            if($file_old = $blog->image){
                if($file_old != 'frontend/assets/images/blog/blog-single-1.jpg'){
                    unlink($file_old);}}

            $newimage = $request->file('image');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'blogImages/';
            $newimage->move($destinationPath, $name);
            $blog->image = 'blogImages/' . $name;

            //Resize image
            $path = public_path('blogImages/'.$name);
            $img = Image::make($path)->resize(770,505)->save($path);
        }
        $blog->save();
        return redirect('/blogs')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        if($fImage = $blog->fImage){
            unlink($fImage);}
        if($image = $blog->image){
            unlink($image);}
        return redirect('/blogs')->with('danger','Blog Deleted Successfully');
    }
}
