@extends('layouts.backapp')
@section('title','Website Images')
@section('section')





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
                <h3 class="card-title">Website Images</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('update.images')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Image1 [495X690]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image1" name="image1">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image1}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image2 [500X712]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="image2">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image2}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image3 [643X303]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image3" name="image3">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image3}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image4 [220X275]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image4" name="image4">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image4}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image5 [434X619]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image5" name="image5">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image5}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image6 [370X590]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image6" name="image6">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image6}}"
                  </div> <br/> <br/>

                  <div class="form-group">
                    <label for="exampleInputFile">Image7 [356X78]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image7" name="image7">
                        <label class="custom-file-label" for="">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:80px;width:157px" class="mt-1" src="{{$websiteImages->image7}}"
                  </div> <br/> <br/>
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



