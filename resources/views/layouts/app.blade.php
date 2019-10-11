<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{('css/app.css')}}">
        <title>BFA</title>
    <body>
    @extends('layouts.header')
        @yield('content')
     @extends('layouts.footer')
        </body>
</html>
