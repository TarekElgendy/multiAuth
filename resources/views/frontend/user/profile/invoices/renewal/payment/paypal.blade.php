@extends('layouts.app')
@section('title_page')
Invoice | Paypal
@endsection
@section('content')
<!-- START => Breadcrumb -->
<div class="head-pages">
    <div class="breadcrumb-bg"></div>
    <div class="container-fluid">
        <div class="breadcrumb-title">
            <strong>@lang('site.We keep pace with development to create an easier life')</strong>
        </div>
</div>
</div>

<a href="{{url('/customer/renewal/success')}}">/customer/renewal/congratulation</a>
<!-- //END => Breadcrumb -->
<section class="page-checkout-success mt-4">
    <script src="https://www.paypal.com/sdk/js?client-id={{client_id()}}">
    </script>
    <div class="center" style="margin-left: 20% ; padding: 3%">
        <div id="paypal-button-container"></div>
    </div>
    <script>
        paypal.Buttons({
            createOrder: function (data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: {{  $total_sum}}
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function (details) {
                    // This function shows a transaction success message to your buyer.
                    //alert('Transaction completed by ' + details.payer.name.given_name);
                    return document.location.href = url('/customer/renewal/success');
                });
            }
        }).render('#paypal-button-container');
        //This function displays Smart Payment Buttons on your web page.
    </script>
</section>
@endsection
