@extends('layouts.backapp')
@section('title','Services')
@section('section')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li>
                                <a href="{{route('service.create')}}" class="btn btn-primary btn-sm">Create New</a>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Services Offered</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="myTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($services as $service)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td><i class="{{$service->icon}}"></i></td>
                                            {{-- <td><img style="height:50px;width:60px"  src="" alt="{{$service->icon}}"> </td> --}}
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->price}} </td>
                                            <td>
                                                <a href="{{url('editservice')}}/{{$service->id}}"
                                                   class="btn btn-primary">Edit</a>
                                                <a href="{{url('deleteservice')}}/{{$service->id}}"
                                                   class="btn btn-danger">Delete</a>
                                                {{-- <form action="{{url('deleteservice')}}/{{$service->id}}" method="get" style="display: inline-block">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="4">No records found</th>
                                        </tr>
                                    @endforelse
                                    </tbody>
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
    <!-- /.content-wrapper -->

@endsection









