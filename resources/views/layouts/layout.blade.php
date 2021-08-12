<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>layouts</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/apptwo.css') }}" >

        </head>
        <body>
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="col navbar-nav ">
                    <li class="nav-item col-2 text-center ">
                        <a class="nav-link h3 {{ Request::is('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link h3 {{ Request::is('about') ? 'active' : ''}} " href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link h3 {{ Request::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link h3 {{ Request::is('SeeMessages') ? 'active' : ''}}" href="{{route('SeeMessages')}}">See Messages</a>
                    </li>
                    </ul>
            </nav>
            <div class="container-fluid">
                @if(Request::is('home'))
                    @include('layouts.jumbotron')
                @endif

                    <div class="row">
                        <div class="col-6 bg-warning text-light">
                            @yield('content')
                        </div>
                        <div class="col-6 bg-primary text-center text-light">
                            <h1>Side Bar</h1>
                            <p>This is a side bar</p>
                        </div>
                    </div>
            </div>
            <footer id="footer123" class="text-center">
                <p> copy right &copy; by ... </p>
            </footer>
        </body>
    </html>