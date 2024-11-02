<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-light" style="background-color: rgba(17, 21, 39, 1);">
    <div class="min-h-screen" >
        @include('layouts.navigation')

        <div class="container-fluid">
            <div class="row flex-nowrap">
                <!-- Sidebar -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-light" style="background-color: rgba(31, 41, 55, 1);">
                    @include('components.sidebar')
                </div>

                <!-- Page Content -->
                <div class="col py-3">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start" style=";">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1);">
    © 2020 Copyright:
    <a  style="color: rgba(255, 255, 255, 1); font-weight: bold;"
    href="https://mdbootstrap.com/">GamingCot.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
