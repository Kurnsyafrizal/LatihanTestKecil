<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <title>@yield("title")</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        </style>
    </head>

    <body> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand " href="#">Company</a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item"  aria-pressed="true" href="{{ route('crud') }}">{{ __('CRUD') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="/">{{ __('Hitung') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('addParts') }}">{{ __('Add Parts') }}</a>
                </div>
            </div>

            
            <ul class="nav justify-content-end">
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalSatu') }}">{{ __('1') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalDua') }}">{{ __('2') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalTiga') }}">{{ __('3') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalEmpat') }}">{{ __('4') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalLima') }}">{{ __('5') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalEnam') }}">{{ __('6') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalTujuh') }}">{{ __('7') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalDelapan') }}">{{ __('8') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalSembilan') }}">{{ __('9') }}</a>
                </div>
                <div class="navbar-nav ml-2">
                    <a class="nav-link nav-item active"  aria-pressed="true" href="{{ route('HalSepuluh') }}">{{ __('10') }}</a>
                </div>
            </div>
            </ul>
        </nav>

        @yield('content')
    </body>


    {{-- JavaScript Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
