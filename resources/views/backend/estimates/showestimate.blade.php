@extends('layouts.backapp')
@section('title','Estimate Details')
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
                                <h3 class="card-title">Estimate Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select class="form-control" id="categoryid" name="categoryid">
                                            <option selected disabled>{{$estimate->category->name}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Service</label>
                                        <select class="form-control" id="serviceid" name="serviceid">
                                            <option selected disabled>{{$estimate->service->name}}</option>
                                        </select>
                                    </div>
                                    <div class="field_wrapper">
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
                                                           name="item[]" disabled>
                                                </div>
                                                <div class="col-2">
                                                    <label for="">Price</label>
                                                    <input type="number" value="{{$prices[$count]}}" class="form-control"
                                                           id="price"
                                                           name="price[]" disabled>
                                                </div>
                                                <div class="col-2">
                                                    <label for="">Quantity</label>
                                                    <input type="number" value="{{$quantities[$count]}}"
                                                           class="form-control" id="quantity"
                                                           name="quantity[]" disabled>
                                                </div>
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
                                <textarea class="summernote" name="description" disabled>
                                {!! $estimate->description !!}</textarea>
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
                                               disabled>
                                    </div>
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



