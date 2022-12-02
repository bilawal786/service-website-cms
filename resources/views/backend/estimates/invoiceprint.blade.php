<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodingCrust | Invoice Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<?php $settings = \App\Setting::first(); ?>
<body>
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <i class="fas fa-globe"></i> CodingCrust
                    <small class="float-right">Date: {{$estimate->date}}</small>
                </h2>
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
                <b>Payment Due:</b> {{$estimate->date}}<br>
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
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
                    jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
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
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>
</body>
</html>
