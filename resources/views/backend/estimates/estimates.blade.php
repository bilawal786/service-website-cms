@extends('layouts.backapp')
@section('title','Estimates')
@section('section')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Estimates</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li>
                                <a href="{{route('estimate.create')}}" class="btn btn-primary btn-sm">Create New</a>
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
                                <h3 class="card-title">Estimations</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="myTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($estimates as $estimate)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$estimate->category->name}}</td>
                                            <td>{{$estimate->service->name}}</td>
                                            <td>{{$estimate->date}}</td>
                                            <td>
                                                <a href="{{url('estimate')}}/{{$estimate->id}}/edit"
                                                   class="btn btn-primary">Edit</a>
                                                <form action="{{url('estimate')}}/{{$estimate->id}}" method="post"
                                                      style="display: inline-block">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                                <a href="{{url('estimate')}}/{{$estimate->id}}"
                                                   class="btn btn-info">Details</a>
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


