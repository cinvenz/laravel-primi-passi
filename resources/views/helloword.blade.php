@php
    $title = 'Hello Word';
    $firstlink = 'http://127.0.0.1:8000/firstlink';
    $secondlink = 'http://127.0.0.1:8000/secondlink';
    $thirdlink = 'http://127.0.0.1:8000/thirdlink';
    $fourthlink = 'http://127.0.0.1:8000/fourthlink';

    $arrlink = ['firstlink', 'secondlink', 'thirdlink', 'fourthlink'];

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .arrlink{
                display: flex;
                justify-content: center;
                gap: 3rem;
            }

            .arrlink li {
                list-style: none;
            }

            .arrlink a {
                text-decoration: none;
                color:red;
                font-weight: bold
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{$title}}
                </div>

                <div class="links">
                    <a href="{{$firstlink}}">First Link</a>
                    <a href="{{$secondlink}}">Second Link</a>
                    <a href="{{$thirdlink}}">Third Link</a>
                    <a href="{{$fourthlink}}">Fourth Link</a>
                </div>

                <div class="arrlink">
                    @foreach($arrlink as $link)
                       <ul>
                            <li><a href="{{ $link }}">{{$link}}</a></li>
                       </ul>
                    @endforeach;
                </div>
            </div>
        </div>
    </body>
</html>
