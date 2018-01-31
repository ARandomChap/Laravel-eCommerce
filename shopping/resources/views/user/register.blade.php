@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4 col-md-offset-4">

            <h1>Sign up</h1>
            <hr>

            @if(count($errors) > 0)
                <div class="alter alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{ $error }} </p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('user.register') }}" method="post">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address1">Address 1</label>
                    <input type="text" id="address1" name="address1" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="text" id="address2" name="address2" class="form-control">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control">
                </div>

                <div class="form-group">
                    <label for="county">County</label>
                    <input type="text" id="county" name="county" class="form-control">
                </div>

                <div class="form-group">
                    <label for="postal_code">Post code</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control">
                </div>
                <button type="sumbit" class="btn btn-group-justified">Register</button>

                {{ csrf_field() }}

            </form>

        </div>
    </div>

@endsection