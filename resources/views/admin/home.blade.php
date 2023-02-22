<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>laravel</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@2.0/nanumsquare.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css">

        {{-- style --}}
        <link href="{{ asset('css/reset.css')}}" rel="stylesheet">
        <link href="{{ asset('css/font.css')}}" rel="stylesheet">
        <link href="{{ asset('css/admin_common.css')}}" rel="stylesheet">

        {{-- script --}}
        <script src="{{ asset('plugin/jquery-3.4.0.min.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>
        <script src="https://kit.fontawesome.com/3b52f36444.js" crossorigin="anonymous"></script>

        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="main-container">
            @include('admin.layouts.navigation')
            <div class="main-acticle">
                <div class="section-content">
                    @yield('contents')
                </div>
            </div>
        </div>
        @yield('contents-script')
    </body>
</html>