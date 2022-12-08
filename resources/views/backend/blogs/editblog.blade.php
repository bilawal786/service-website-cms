@extends('layouts.backapp')
@section('title','Edit Blog')
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
                                <h3 class="card-title">Edit Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('blogs.update',$blog->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Blog Title</label>
                                        <input type="text" class="form-control" id="title" value="{{$blog->title}}"
                                               name="title"
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
                                        @if($blog->fImage)
                                            <img style="height:70px;width:90px" class="mt-1"
                                                 src="{{ asset($blog->fImage) }}"
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Featured Description</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="fDescription">
                                  {{$blog->fDescription}}
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
                                        <input type="date" class="form-control" id="date" value="{{$blog->date}}"
                                               name="date"
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
                                        @if($blog->image)
                                            <img style="height:70px;width:90px" class="mt-1"
                                                 src="{{ asset($blog->image) }}"
                                        @endif
                                    </div>
                                    <?php
                                    $categoryids = [];
                                    $categoryids[] = $blog->categoryid;
                                    ?>
                                    <div class="form-group">
                                        <label for="">Select Category</label>
                                        <select class="form-control" name="categoryid">
                                            @foreach ($categories as $category)
                                                <option
                                                    value="{{$category->id}}" {{in_array($category->id,$categoryids) ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Details Heading</label>
                                        <input type="text" class="form-control" id="heading" value="{{$blog->heading}}"
                                               name="heading"
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
                                  {{$blog->description}}
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
                                        <input type="text" class="form-control" id="author" value="{{$blog->author}}" name="author"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" value="Update" class="btn btn-primary btn-block">
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



