<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/common_desktop.css')}}" rel="stylesheet">
        <link href="{{ asset('css/reset.css')}}" rel="stylesheet">

        <script src="{{ asset('plugin/jquery-3.4.0.min.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>

        
    </head>
    <body>
        @include('desktop.layouts.navigation')
        @include('desktop.layouts.main')
    </body>
</html>
