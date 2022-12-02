@extends('layouts.backapp')
@section('title','Print Invoice')
@section('section')

<?php $settings = \App\Setting::first(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> CodingCrust
                                    <small class="float-right">Date: {{$estimate->date}}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>CodingCrust, Inc.</strong><br>
                                    {{$settings->address}}<br>
                                    Phone: {{$settings->number1}}<br>
                                    Email: {{$settings->email1}}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>John Doe</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    Phone: (555) 539-1037<br>
                                    Email: john.doe@example.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b>{{$estimate->date}} <br>
                                <b>Account:</b> 968-34567
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($estimate->item)
                                            <?php
                                            $im_items = $estimate->item;
                                            $items = explode(',', $im_items);
                                            $im_prices = $estimate->price;
                                            $prices = explode(',', $im_prices);
                                            $im_quantities = $estimate->quantity;
                                            $quantities = explode(',', $im_quantities);
                                            $count = 0;
                                            $subtotal = 0;
                                        foreach ($items as $item):
                                            ?>
                                    <tr>
                                        <td>{{$quantities[$count]}}</td>
                                        <td>{{$item}}</td>
                                        <td>{!! $estimate->description !!}</td>
                                        <td>{{$prices[$count]}}</td>
                                    </tr>
                                                <?php
                                                $subtotal +=$prices[$count];
                                                $count++;
                                                ?>
                                    </tbody>
                                    <?php endforeach; ?>
                                    @endif
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Payment Methods:</p>
                                <img src="{{asset('backend/dist/img/credit/visa.png')}}" alt="Visa">
                                <img src="{{asset('backend/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                                <img src="{{asset('backend/dist/img/credit/american-express.png')}}" alt="American Express">
                                <img src="{{asset('backend/dist/img/credit/paypal2.png')}}" alt="Paypal">

                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                    plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Amount Due {{$estimate->date}}</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>{{$subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>{{$subtotal}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="{{url('invoice-print')}}/{{$estimate->id}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

