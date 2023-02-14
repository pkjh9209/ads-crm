<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3b52f36444.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/admin_common.css')}}" rel="stylesheet">
        <link href="{{ asset('css/reset.css')}}" rel="stylesheet">

        <script src="{{ asset('plugin/jquery-3.4.0.min.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>

        
    </head>
    <body>
        <div class="main-container">
            @include('desktop.admin.layouts.navigation')
            <div class="section-content">
                <div class="container">
                    @yield('contents')
                </div>
            </div>
        </div>
    </body>
</html>