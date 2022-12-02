@extends('layouts.backapp')
@section('title','Edit Estimate')
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
                                <h3 class="card-title">Edit Estimate</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('estimate.update',$estimate->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <?php
                                        $categoryids = [];
                                        $categoryids[] = $estimate->categoryid;
                                        ?>
                                        <label for="">Select Category</label>
                                        <select class="form-control" id="categoryid" name="categoryid">
                                            @foreach ($categories as $category)
                                                <option
                                                    value="{{$category->id}}" {{in_array($category->id,$categoryids) ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Service</label>
                                        <select class="form-control" id="serviceid" name="serviceid">
                                            <option selected>{{$estimate->service->name}}</option>
                                        </select>
                                    </div>
                                    <div class="field_wrapper">
                                        <p class=""><a href="javascript:void(0);"
                                                       class="btn btn-primary mt-4 add_button">Add New Item</a></p>
                                        @if($estimate->item)
                                                <?php
                                                $im_items = $estimate->item;
                                                $items = explode(',', $im_items);
                                                $im_prices = $estimate->price;
                                                $prices = explode(',', $im_prices);
                                                $im_quantities = $estimate->quantity;
                                                $quantities = explode(',', $im_quantities);
                                                $count = 0;
                                            foreach ($items as $item):
                                                ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Item</label>
                                                    <input type="text" value="{{$item}}" class="form-control" id="item"
                                                           name="item[]">
                                                </div>
                                                <div class="col-2">
                                                    <label for="">Price</label>
                                                    <input type="number" value="{{$prices[$count]}}"
                                                           class="form-control"
                                                           id="price"
                                                           name="price[]">
                                                </div>
                                                <div class="col-2">
                                                    <label for="">Quantity</label>
                                                    <input type="number" value="{{$quantities[$count]}}"
                                                           class="form-control" id="quantity"
                                                           name="quantity[]">
                                                </div>
                                                <a href="javascript:void(0);"
                                                   class="btn btn-danger mt-4 remove_button">Remove</a>
                                                    <?php $count++; ?>
                                            </div>
                                            <?php endforeach; ?>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-body">
                                <textarea class="summernote" name="description">
                                  {!! $estimate->description !!}
                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="date" value="{{$estimate->date}}"
                                               name="date"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" value="Update" class="btn btn-primary btn-block">
                                    <input type="submit" value="Update and Print" class="btn btn-primary btn-block mt-3">
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



    <script>
        $('#categoryid').on("change", function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
            let ourUrl = "{{url('getservices')}}";
            $.ajax({
                url: ourUrl,
                method: "POST",
                data: {
                    id: $('#categoryid').val()
                },
                success: function (response) {
                    $("#serviceid").html('');
                    response = response.services;
                    for (item of response) {
                        $("#serviceid").append(`<option value="${item.id}">${item.name}</option>`)
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            var maxField = 10;
            var addButton = $('.add_button');
            var wrapper = $('.field_wrapper');
            var fieldHTML = '<div class="row"><div class="col-3"><label for="">Item</label><input type="text" class="form-control" id="item" value="" name="item[]"></div><div class="col-2"><label for="">Price</label><input type="number" class="form-control" id="price" value=""name="price[]"></div><div class="col-2"><label for="">Quantity</label><input type="number" class="form-control" id="quantity" value=""name="quantity[]"></div><a href="javascript:void(0);" class="btn btn-danger mt-4 remove_button">Remove</a> </div>';
            var x = 1;
            $(addButton).click(function () {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });

    </script>

@endsection



