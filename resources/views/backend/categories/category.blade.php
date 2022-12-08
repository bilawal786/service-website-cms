@extends('layouts.backapp')
@section('title','Categories')
@section('section')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li>
                <a href="{{route('category.create')}}" class="btn btn-primary btn-sm">Create New</a>
              </li>
            </ol>
          </div>
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success text-center">{{Session::get('success')}}</div>
       @endif
       @if (Session::has('danger'))
        <div class="alert alert-danger text-center">{{Session::get('danger')}}</div>
       @endif
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">

              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Operations</th>
                  </tr>
                  </thead>
                <tbody>
                    @forelse ($categories as $category)
                     <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$category->name}}</td>
                        <td><img style="height:70px;width:90px" src="{{ asset($category->image) }}"</td>
                        <td>
                            <a href="{{url('category')}}/{{$category->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{url('category')}}/{{$category->id}}" method="post" style="display: inline-block">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                            <a href="{{url('category')}}/{{$category->id}}" class="btn btn-info">View</a>
                        </td>
                     </tr>
                    @empty
                    <tr>
                        <th colspan="4">No records found</th>
                    </tr>
                    @endforelse
                </tbody>
                {{-- {{url('category')}}/{{$category->id}}/edit --}}

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>




@endsection









