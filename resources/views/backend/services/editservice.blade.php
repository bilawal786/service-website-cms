@extends('layouts.backapp')
@section('title','Edit Service')
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
                <h3 class="card-title">Edit Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('updateservice')}}/{{$service->id}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Service Icon</label>
                        <input type="text" class="form-control" id="icon" value="{{$service->icon}}" name="icon" placeholder="">
                      </div>
                  <div class="form-group">
                    <label for="">Service Name</label>
                    <input type="text" class="form-control" id="name" value="{{$service->name}}" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" id="price" value="{{$service->price}}" name="price" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 1</label>
                    <input type="text" class="form-control" id="title1" value="{{$service->title1}}" name="title1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 2</label>
                    <input type="text" class="form-control" id="title2" value="{{$service->title2}}" name="title2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 3</label>
                    <input type="text" class="form-control" id="title3" value="{{$service->title3}}" name="title3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Title 4</label>
                    <input type="text" class="form-control" id="title4" value="{{$service->title4}}" name="title4" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Service Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" value="{{$service->image}}" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>
                    </div>
                    <img style="height:70px;width:90px" class="mt-1" src="{{ asset($service->image) }}"
                  </div>
                  <div class="form-group">
                    <label for="">Heading</label>
                    <input type="text" class="form-control" id="heading" value="{{$service->heading}}" name="heading" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Sub Heading</label>
                    <input type="text" class="form-control" id="subheading" value="{{$service->subheading}}" name="subheading" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Other Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" value="" id="otherimages" name="otherimages[]" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose New Images</label>
                      </div>
                    </div>
                    @if($service->otherimages)
                    <?php
                       $im_images = $service->otherimages;
                       $images = explode(',', $im_images);

                       foreach ($images as $image) :
                       ?>
                       <div> <img style="height:70px;width:90px" class="mt-1" src="{{ asset($image) }}" </div>
                       <?php endforeach ?>
                    @endif

                  </div>
                 <div class="form-group">
                    <label for="">Description</label>
                    {{-- <textarea name="description" class="form-control"  id="description" rows="3"></textarea> --}}
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="description">
                                    {{$service->description}}
                                </textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                 </div>
                 <div class="form-group">
                    <label for="">Feature 1</label>
                    <input type="text" class="form-control" id="feature1" value="{{$service->feature1}}" name="feature1" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="">Feature 1 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea name="feature1detail" class="summernote">{{$service->feature1detail}}</textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                    </section>
                  </div>

                  <div class="form-group">
                    <label for="">Feature 2</label>
                    <input type="text" class="form-control" id="feature2" value="{{$service->feature2}}" name="feature2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Feature 2 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="feature2detail">
                                    {{$service->feature2detail}}
                                </textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                 </div>
                  <div class="form-group">
                    <label for="">Feature 3</label>
                    <input type="text" class="form-control" id="feature3" value="{{$service->feature3}}" name="feature3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Feature 3 Details</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="feature3detail">
                                    {{$service->feature3detail}}
                                </textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
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



