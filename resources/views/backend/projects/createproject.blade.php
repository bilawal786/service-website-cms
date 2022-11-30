@extends('layouts.backapp')
@section('title','Create Project')
@section('section')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12 mt-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Project</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <input type="text" class="form-control" id="name" value="" name="name"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Project Image [370X370]</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Project Details Image 1 [670X405]</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image1" name="image1">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Heading 1</label>
                                        <input type="text" class="form-control" id="heading1" value="" name="heading1"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description 1</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="description1">
                                  Place some text here
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </section>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Heading 2</label>
                                        <input type="text" class="form-control" id="heading2" value="" name="heading2"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description 2</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="description2">
                                  Place some text here
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </section>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Category</label>
                                        <select class="form-control select2" name="categoryid">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Service</label>
                                        <select class="form-control select2" name="serviceid">
                                            @foreach ($services as $service)
                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Client</label>
                                        <input type="text" class="form-control" id="client" value="" name="client"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="date" value="" name="date"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input type="text" class="form-control" id="location" value="" name="location"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Project Details Image 2 [1170X585]</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image2" name="image2">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Summary Description</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="summarydescription">
                                  Place some text here
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </section>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <input type="submit" value="Create" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection



