@extends('layouts.master')

@section('title')
    Grand Touring
@endsection

@section('content')

    <form action="checkout" method="POST">
        {{ csrf_field() }}
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_VsQyC48N6GENblRsJBPH1IUc"
                data-amount="{{ $total * 100}}"
                data-name="Grand Touring"
                data-description=""
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-zip-code="true"
                data-currency="gbp">
        </script>
    </form>

    {{--<script src="https://js.stripe.com/v3/"></script>--}}
    {{--<form action="checkout" method="post" id="payment-form">--}}

        {{--{{ csrf_field() }}--}}

        {{--<div class="group">--}}
            {{--<label>--}}
                {{--<span>Name</span>--}}
                {{--<input name="cardholder-name" class="field" placeholder="Jane Doe" />--}}
            {{--</label>--}}
            {{--<label>--}}
                {{--<span>Phone</span>--}}
                {{--<input class="field" placeholder="(123) 456-7890" type="tel" />--}}
            {{--</label>--}}
        {{--</div>--}}
        {{--<div class="group">--}}
            {{--<label>--}}
                {{--<span>Card</span>--}}
                {{--<div id="card-element" class="field"></div>--}}
                {{----}}
            {{--</label>--}}
        {{--</div>--}}
        {{--<button type="submit">Pay $25</button>--}}
        {{--<div class="outcome">--}}
            {{--<div class="error"></div>--}}
            {{--<div class="success">--}}
                {{--Success! Your Stripe token is <span class="token"></span>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">--}}
            {{--<h1>Checkout</h1>--}}
            {{--<hr style="border-color: lightgray">--}}

            {{--<div class="panel panel-default">--}}
                {{--<h4>Your Total: &pound;{{ $total }}</h4>--}}
            {{--</div>--}}

            {{--<div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : ''}}>--}}
                {{--{{ Session::get('error') }}--}}
            {{--</div>--}}

            {{--<form action="{{route('checkout')}}" method="POST" id="payment-form">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">Name</label>--}}
                            {{--<input type="text" id="name" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="address">Address</label>--}}
                            {{--<input type="text" id="address" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="card-name">Card Holder Name</label>--}}
                            {{--<input type="text" id="card-name" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="card-number">Card number</label>--}}
                            {{--<input type="text" id="card-element" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="card-expiry-month">Expiration Month</label>--}}
                                    {{--<input type="text" id="card-expiary-month" class="form-control" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="card-expiry-year">Expiration Year</label>--}}
                                    {{--<input type="text" id="card-expiary-year" class="form-control" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="vard-cvc">CVC</label>--}}
                            {{--<input type="text" id="card-cvc" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--{{ csrf_field() }}--}}

                {{--<button type="submit" class="btn btn-success">Buy Now</button>--}}

            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('scripts')



    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{URL::to('js/checkout.js')}}"></script>
@endsection