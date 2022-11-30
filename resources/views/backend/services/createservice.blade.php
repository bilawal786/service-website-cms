@extends('layouts.backapp')
@section('title','Create Service')
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
                <h3 class="card-title">Create Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Service Icon</label>
                        <input type="text" class="form-control" id="icon" value="" name="icon" placeholder="">
                      </div>
                  <div class="form-group">
                    <label for="">Service Name</label>
                    <input type="text" class="form-control" id="name" value="" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" id="price" value="" name="price" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 1</label>
                    <input type="text" class="form-control" id="title1" value="" name="title1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 2</label>
                    <input type="text" class="form-control" id="title2" value="" name="title2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 3</label>
                    <input type="text" class="form-control" id="title3" value="" name="title3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 4</label>
                    <input type="text" class="form-control" id="title4" value="" name="title4" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Service Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Heading</label>
                    <input type="text" class="form-control" id="heading" value="" name="heading" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Sub Heading</label>
                    <input type="text" class="form-control" id="subheading" value="" name="subheading" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Other Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="otherimages" name="otherimages[]" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose Images</label>
                      </div>
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="">Description</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="description">
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
                    <label for="">Feature 1</label>
                    <input type="text" class="form-control" id="feature1" value="" name="feature1" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="">Feature 1 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea name="feature1detail" class="summernote">Place some text here</textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                    </section>
                  </div>

                  <div class="form-group">
                    <label for="">Feature 2</label>
                    <input type="text" class="form-control" id="feature2" value="" name="feature2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Feature 2 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="feature2detail">
                                  Place some text here
                                </textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                 </div>
                  <div class="form-group">
                    <label for="">Feature 3</label>
                    <input type="text" class="form-control" id="feature3" value="" name="feature3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Feature 3 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="feature3detail">
                                  Place some text here
                                </textarea>
                              </div>
                            </div>
                          </div>
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



