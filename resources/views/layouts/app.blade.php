<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset("build/assets/icons_list.ico")}}">

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{route('task.index')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                                <img width="39" height="39" src="https://img.icons8.com/sf-black/39/FFFFFF/todo-list.png" alt="todo-list"/>
                            </a>
                        </div>
                        <div class="d-flex align-items-center dropdown text-end">
                            <div class="font-medium px-4 text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu text-small" style="">
                                <li><a class="dropdown-item" href="{{route("profile.edit")}}">{{__('Profile')}}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route("logout")}}">{{__('Log Out')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
