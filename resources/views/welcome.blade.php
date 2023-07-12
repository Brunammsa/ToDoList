<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <body>
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                                <img width="29" height="29" src="https://img.icons8.com/external-tal-revivo-light-tal-revivo/24/external-to-do-list-with-tick-boxes-at-left-side-grid-light-tal-revivo.png" 
                                alt="external-to-do-list-with-tick-boxes-at-left-side-grid-light-tal-revivo"/>
                            </a>
                        </div>
                        <div class="d-flex align-items-center dropdown text-end">
                            <div class="font-medium px-4 text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu text-small" style="">
                                <li><a class="dropdown-item" href="{{route("profile.edit")}}">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route("logout")}}">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </body>
</html>
