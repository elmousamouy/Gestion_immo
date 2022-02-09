<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title trspan="authPortal"></title>
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
        <script src="{{ asset('assets/js/jquery.preloader.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon" type="image/vnd.microsoft.icon"
            sizes="16x16 32x32 48x48 64x64 128x128">
        <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"
            type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">
    </head>
    
<body>
    

        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>
