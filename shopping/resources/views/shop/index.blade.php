@extends('layouts.master')

@section('title')
    Grand Touring
@endsection

@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-oddset-3">
            <div id="charger-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif

    @foreach($products->chunk(3) as $productChunk)

        <div class="row">

            @foreach($productChunk as $product)

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->imagePath }}" alt="...">
                        <div class="caption">
                            <h3>
                                <a href="/product/{{ $product->id }}">{{ $product->title }}</a>
                            </h3>

                            <p class="description"> {{ str_limit($product->description, 150) }}</p>

                            <div class="clearfix">
                                <hr>
                                <div class="pull-left price">&pound;{{ number_format($product->price, 2) }}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>

        <hr>

    @endforeach

@endsection