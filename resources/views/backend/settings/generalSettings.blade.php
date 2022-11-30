@extends('layouts.backapp')
@section('title','General Settings')
@section('section')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mt-4">
            <!-- general form elements -->
            @if (Session::has('success'))
        <div class="alert alert-success text-center">{{Session::get('success')}}</div>
       @endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('update.settings')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">About Us</label>
                        <textarea name="aboutus" class="form-control"  id="aboutus" rows="3">{{$settings->aboutus}}</textarea>
                        {{-- <input type="text" class="form-control" id="aboutus" name="aboutus" placeholder=""> --}}
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Logo [157X44]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose logo</label>
                      </div>
                    </div>
                    <img style="height:44px;width:157px" class="mt-1" src="{{$settings->image}}"
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="address" value="{{$settings->address}}" name="address" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="email1" value="{{$settings->email1}}" name="email1" placeholder="">
                    <input type="text" class="form-control mt-1" id="email2" value="{{$settings->email2}}" name="email2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control" id="number1" value="{{$settings->number1}}" name="number1" placeholder="">
                    <input type="text" class="form-control mt-1" id="number2" value="{{$settings->number2}}" name="number2" placeholder="">
                  </div>
                </div>
                <!-- /.card-body -->

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


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<script>
    setTimeout(() => {
        $(".alert-success").hide();
    }, 4000);
</script>


@endsection





{{-- <form action="{{url('category')}}" method="POST">
    <label for="">Name</label>
    <input type="text" name="name" id="name" class="form-control">
    <label for="">Image</label>
    <input type="file" name="image" id="image" enctype="multipart/form-data">
    <input type="submit" value="Add Category" class="btn btn-primary btn-block">
</form> --}}
