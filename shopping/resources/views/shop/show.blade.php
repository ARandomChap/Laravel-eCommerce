@extends('layouts.master')

@section('content')

        <div class="thumbnail">
            <img src="{{ URL::to($product->imagePath) }}" alt="...">
            <div class="caption">
                <h3>
                    {{ $product->title }}
                </h3>

                <p class="description"> {{ $product->description }}</p>

                <div class="clearfix">
                    <hr>
                    <div class="pull-left price">&pound;{{ number_format($product->price, 2) }}</div>
                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to cart</a>
                </div>

            </div>
        </div>

@endsection