@extends('layouts.backapp')
@section('title','Edit Project')
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
                <h3 class="card-title">Edit Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('project.update',$project->id)}}" method="post" enctype="multipart/form-data">
               @method('PUT')
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input type="text" class="form-control" id="name" value="{{$project->name}}" name="name" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Project Image [370X370]</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                          </div>
                        </div>
                        @if($project->image)
                        <img style="height:70px;width:90px" class="mt-1" src="{{ asset($project->image) }}"
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Project Details Image 1 [670X405]</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image1" name="image1">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                          </div>
                        </div>
                        @if ($project->image1)
                        <img style="height:70px;width:90px" class="mt-1" src="{{ asset($project->image1) }}"
                        @endif
                      </div>
                  <div class="form-group">
                    <label for="">Heading 1</label>
                    <input type="text" class="form-control" id="heading1" value="{{$project->heading1}}" name="heading1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Description 1</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="description1">
                                    {{$project->description1}}
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
                    <input type="text" class="form-control" id="heading2" value="{{$project->heading2}}" name="heading2" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Description 2</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="description2">
                                    {{$project->description2}}
                                </textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                    </section>
                 </div>
                 <?php
                       $categoryids = [];
                        $categoryids[] = $project->categoryid;
                 ?>
                 <div class="form-group">
                    <label for="">Select Category</label>
                    <select class="form-control" name="categoryid" >
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{in_array($category->id,$categoryids) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                    <?php
                    $serviceids = [];
                    $serviceids[] = $project->serviceid;
                    ?>
                    <div class="form-group">
                        <label for="">Select Service</label>
                        <select class="form-control" name="serviceid" >
                            @foreach ($services as $service)
                                <option value="{{$service->id}}" {{in_array($service->id,$serviceids) ? 'selected' : ''}}>{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="">Client</label>
                    <input type="text" class="form-control" id="client" value="{{$project->client}}" name="client" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" id="date" value="{{$project->date}}" name="date" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" id="location" value="{{$project->location}}" name="location" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Project Details Image 2  [1170X585]</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="image2">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>
                    </div>
                    @if ($project->image2)
                    <img style="height:70px;width:90px" class="mt-1" src="{{ asset($project->image2) }}"
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">Summary Description</label>
                    <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-body">
                                <textarea class="summernote" name="summarydescription">
                                    {{$project->summarydescription}}
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



