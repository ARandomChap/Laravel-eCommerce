@extends('layouts.master')

@section('content')

    <div class="col-md-10">
        <h1>Add a Product</h1>

        <hr>

        <form method="POST" action="/products" enctype='multipart/form-data'>

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="integer" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter your post here..." required></textarea>
            </div>

            <div action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="imagePath" id="imagePath">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

{{--        @include('layouts.errors')--}}

    </div>
    </div>

@endsection