@extends('layouts.master')

@section('title')
    Grand Touring
@endsection


@section('content')


    <html>
    <head>
        <title>Jack Chapman</title>
        {{--<meta charset="utf-8" />--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />--}}
        {{--<link rel="stylesheet" href="{{ URL::to('css/main.css') }}" />--}}
        <noscript><link rel="stylesheet" href="" /></noscript>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-RpX8okQqCyUNG7PlOYNybyJXYTtGQH+7rIKiVvg1DLg6jahLEk47VvpUyS+E2/uJ" crossorigin="anonymous">
    </head>
    <body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="content" id>
                <div class="inner">
                    <h1>Grand Touring</h1>
                    <p>Welcome.</p>
                </div>
            </div>

            <header id="header">
                <div class="content" id>
                    <div class="inner">
                        <h1>Intro</h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ligula lorem, sit amet rutrum justo vehicula molestie. Mauris vel nisl sed odio vehicula blandit. Donec efficitur turpis sodales ullamcorper molestie. Aliquam bibendum blandit mi eget auctor. Quisque ut est in justo blandit dapibus. Fusce non nunc vulputate, tristique purus a, pretium orci. Proin sed magna a massa sollicitudin faucibus. In viverra nisl a feugiat fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin condimentum ultricies tortor, vitae scelerisque metus. Sed tincidunt finibus lectus, ut faucibus sapien facilisis ac. Mauris faucibus ligula hendrerit nunc fringilla suscipit. Quisque urna sem, vulputate ac lobortis ut, venenatis ultrices neque. Pellentesque suscipit dapibus orci, eget porttitor mi porttitor non. Cras non nibh non ante commodo fringilla cursus id velit. Integer rhoncus placerat sodales. Donec ac fermentum est, a commodo erat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ligula lorem, sit amet rutrum justo vehicula molestie. Mauris vel nisl sed odio vehicula blandit. Donec efficitur turpis sodales ullamcorper molestie. Aliquam bibendum blandit mi eget auctor. Quisque ut est in justo blandit dapibus. Fusce non nunc vulputate, tristique purus a, pretium orci. Proin sed magna a massa sollicitudin faucibus. In viverra nisl a feugiat fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin condimentum ultricies tortor, vitae scelerisque metus. Sed tincidunt finibus lectus, ut faucibus sapien facilisis ac. Mauris faucibus ligula hendrerit nunc fringilla suscipit. Quisque urna sem, vulputate ac lobortis ut, venenatis ultrices neque. Pellentesque suscipit dapibus orci, eget porttitor mi porttitor non. Cras non nibh non ante commodo fringilla cursus id velit. Integer rhoncus placerat sodales. Donec ac fermentum est, a commodo erat.</p>

                    </div>
                </div>

                {{--<nav>--}}
                    {{--<ul>--}}
                        {{--<li><h1>Intro</h1>--}}

                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ligula lorem, sit amet rutrum justo vehicula molestie. Mauris vel nisl sed odio vehicula blandit. Donec efficitur turpis sodales ullamcorper molestie. Aliquam bibendum blandit mi eget auctor. Quisque ut est in justo blandit dapibus. Fusce non nunc vulputate, tristique purus a, pretium orci. Proin sed magna a massa sollicitudin faucibus. In viverra nisl a feugiat fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin condimentum ultricies tortor, vitae scelerisque metus. Sed tincidunt finibus lectus, ut faucibus sapien facilisis ac. Mauris faucibus ligula hendrerit nunc fringilla suscipit. Quisque urna sem, vulputate ac lobortis ut, venenatis ultrices neque. Pellentesque suscipit dapibus orci, eget porttitor mi porttitor non. Cras non nibh non ante commodo fringilla cursus id velit. Integer rhoncus placerat sodales. Donec ac fermentum est, a commodo erat.</p>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ligula lorem, sit amet rutrum justo vehicula molestie. Mauris vel nisl sed odio vehicula blandit. Donec efficitur turpis sodales ullamcorper molestie. Aliquam bibendum blandit mi eget auctor. Quisque ut est in justo blandit dapibus. Fusce non nunc vulputate, tristique purus a, pretium orci. Proin sed magna a massa sollicitudin faucibus. In viverra nisl a feugiat fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin condimentum ultricies tortor, vitae scelerisque metus. Sed tincidunt finibus lectus, ut faucibus sapien facilisis ac. Mauris faucibus ligula hendrerit nunc fringilla suscipit. Quisque urna sem, vulputate ac lobortis ut, venenatis ultrices neque. Pellentesque suscipit dapibus orci, eget porttitor mi porttitor non. Cras non nibh non ante commodo fringilla cursus id velit. Integer rhoncus placerat sodales. Donec ac fermentum est, a commodo erat.</p>--}}
                        {{--</li>--}}



                    {{--</ul>--}}

                {{--</nav>--}}

        </header>
    </div>


    @endsection

@section('scripts')
    <script src="{{URL::to('js/jquery.min.js')}}"></script>
    <script src="{{URL::to('js/skel.min.js')}}"></script>
    <script src="{{URL::to('js/util.js')}}"></script>
    <script src="{{URL::to('js/main.js')}}"></script>
@endsection