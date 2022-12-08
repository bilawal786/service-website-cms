@extends('layouts.backapp')
@section('title','Queries')
@section('section')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Queries</h1>
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
                                <h3 class="card-title">Queries Data</h3>
                                <form action="{{route('search.bydate')}}" method="post">
                                    @csrf
                                <p class="text-right mr-5"> <label for="">Search by Date</label>
                                <input type="date" name="searchdate" id="searchdate">
                                    <input class="btn btn-sm btn-primary" type="submit" value="search"></p>
                                </form>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="myTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Service</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($queries as $query)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$query->name}}</td>
                                            <td>{{$query->email}}</td>
                                            <td>{{$query->service}}</td>
                                            <td>{{$query->message}}</td>
                                            <td id="querystatus{{$query->id}}">
                                                @if($query->status == 0)
                                                    Active
                                                @elseif($query->status == 1)
                                                    Complete
                                                @elseif($query->status == 2)
                                                    In Process
                                                @elseif($query->status == 3)
                                                    Pending
                                                @elseif($query->status == 4)
                                                    Canceled
                                                @endif
                                            </td>
                                            <td>
                                                <select onchange="getVal(this,{{$query->id}})" class="mr-2 toastsDefaultAutohide" id="status"
                                                        name="status">
                                                    <option value="0" {{$query->status == 0 ? 'selected' : ''}}>Active
                                                    </option>
                                                    <option value="1" {{$query->status == 1 ? 'selected' : ''}}>
                                                        Complete
                                                    </option>
                                                    <option value="2" {{$query->status == 2 ? 'selected' : ''}}>In
                                                        Process
                                                    </option>
                                                    <option value="3" {{$query->status == 3 ? 'selected' : ''}}>
                                                        Pending
                                                    </option>
                                                    <option value="4" {{$query->status == 4 ? 'selected' : ''}}>
                                                        Cancel
                                                    </option>
                                                </select>
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


    <script>
        function getVal(item, id) {
            const statusValues = ["Active", "Complete", "In Process", "Pending", "Canceled"];
            $("#querystatus" + id).html(statusValues[(item.value)]);
            // alert(statusValues[parseInt(item.value)]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
            let ourUrl = "{{url('updatequerystatus')}}";
            $.ajax({
                url: ourUrl,
                method: "POST",
                data: {
                    status: item.value,
                    queryid: id
                },
                success: function (response) {
                    $(document).Toasts('create', {
                        title: 'Updated',
                        class: 'bg-success',
                        autohide: true,
                        delay: 3000,
                        body: 'Query Status Changed Successfully.'
                    })
                },
                error: function (){
                    $(document).Toasts('create', {
                        title: 'Updated',
                        class: 'bg-danger',
                        autohide: true,
                        delay: 3000,
                        body: 'Query Status Changed Successfully.'
                    })
                }
            });
        }

    </script>

@endsection
