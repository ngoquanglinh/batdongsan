<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tittle')</title>
    <base href="{{asset('')}}}">
    <link rel="icon" type="image/png" href="uploads/logo/icon-bds.ico">
    <script src="https://kit.fontawesome.com/8dbffa4ba2.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
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
    <script type="text/javascript" src="assets/js/js.js"></script>	
</body>
</html>