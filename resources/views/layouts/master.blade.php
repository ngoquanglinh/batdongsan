<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tittle')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}}">
    <link rel="icon" type="image/png" href="uploads/logo/icon-bds.ico">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://kit.fontawesome.com/8dbffa4ba2.js"></script>
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <script src="assets/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <style>
        input,
        textarea,
        select,
        option {
            outline: none !important;
            padding: 1px 3px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-content">
            @include('layouts.header')
            @include('layouts.menu')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    @yield('scripts');
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>

</html>