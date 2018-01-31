@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        Order time: {{ $order->created_at }}

                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th> Qty </th>
                                <th> Item </th>
                                <th> Price </th>

                            </tr>
                            </thead>

                            @foreach($order->cart->items as $item)

                                <tbody>
                                <tr>

                                    <td> <span class="badge">{{ $item['qty'] }}</span> </td>
                                    <td> <strong>{{ $item['item']['title']  }}</strong> </td>
                                    <td> <span class="label label-success">&pound{{ $item['price'] }}</span> </td>

                                </tr>
                                </tbody>

                            @endforeach

                        </table>
                            {{--@foreach($order->cart->items as $item)--}}
                                {{--<li class="list-group-item ">--}}
                                    {{--<span class="badge">&pound{{ $item['price'] }}</span>--}}
                                    {{--{{ $item['item']['title'] }} | {{ $item ['qty'] }}--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: &pound{{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection