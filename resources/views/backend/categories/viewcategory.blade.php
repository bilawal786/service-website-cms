@extends('layouts.backapp')
@section('title','View Category')
@section('section')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-11 mt-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="name" value="{{$category->name}}"
                                               name="name" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Category Image</label>
                                        <div class="input-group">
                                        </div>
                                        <img style="height:90px;width:120px" class="mt-1"
                                             src="{{ asset($category->image) }}">
                                    </div>
                                    <div class="form-group mt-5">
                                        <label for="">Related Projects</label>
                                        <ul>
                                            @foreach($category->projects as $project)
                                                <li><h4>{{$project->name}}</h4></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.card-body -->
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

