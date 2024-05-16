<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>@yield('title')</title>
        @yield('style')
    </head>
    <body>
        
        @yield('navbar')
        @yield('content')
        @yield('footer')
        @include('component.modal')
        @yield('script')
        
    </body>
  
       
   
</html>