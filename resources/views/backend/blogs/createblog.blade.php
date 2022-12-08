@extends('layouts.backapp')
@section('title','Create Blog')
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
                                <h3 class="card-title">Create Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Blog Title</label>
                                        <input type="text" class="form-control" id="title" value="" name="title"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Featured Image [370X250]</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="fImage" name="fImage">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Featured Description</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="fDescription">
                                  A short description of the blog to be presented with featured image
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </section>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="date" value="" name="date"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Blog Details Image [770X505]</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Category</label>
                                        <select class="form-control" name="categoryid">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Details Heading</label>
                                        <input type="text" class="form-control" id="heading" value="" name="heading"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Details Description</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="description">
                                  Place detailed description about blog for blog details
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </section>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Author Name</label>
                                        <input type="text" class="form-control" id="author" value="" name="author"
                                               placeholder="">
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



