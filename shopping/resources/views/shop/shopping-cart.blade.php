@extends('layouts.master')

@section('title')
    Grand Touring
@endsection

@section('content')
    @if(Session::has('cart'))

        <div class="panel panel-default col-md-6 col-md-offset-3">
            <div class="panel-body">
                <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
                    <ul class="list-group">

                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th> Qty </th>
                                    <th> Item </th>
                                    <th> Price </th>
                                    <th> Action </th>

                                </tr>
                            </thead>

                            @foreach($products as $product)

                                <tbody>
                                    <tr>

                                        <td> <span class="badge">{{ $product['qty'] }}</span> </td>
                                        <td> <strong>{{ $product['item']['title']  }}</strong> </td>
                                        <td> <span class="label label-success">{{ $product['price'] }}</span> </td>

                                        <td>
                                            <div class="btn-group">

                                                <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>

                                                <ul class="dropdown-menu">

                                                    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Deduct 1</a></li>
                                                    <li><a href="{{ route('product.removeItem', ['id' => $product['item']['id']]) }}">Deduct All</a></li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            @endforeach

                        </table>
                    </ul>
                </div>
            </div>


            <div class="panel-footer">
                <div class="col-md-offset-4 col-sm-offset-4">
                    <strong>Total: &pound;{{ number_format($totalPrice, 2) }}</strong>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success pull-right">Checkout</a>

                <form action="checkout" method="POST">
                    {{ csrf_field() }}
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_VsQyC48N6GENblRsJBPH1IUc"
                            data-amount="{{ $totalPrice * 100}}"
                            data-name="Demo Site"
                            data-description="Widget"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-zip-code="true"
                            data-currency="gbp">
                    </script>

                </form>
            </div>
        </div>
    @else

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in Cart...</h2>
            </div>
        </div>

    @endif
@endsection