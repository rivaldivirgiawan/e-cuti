<!doctype html>
<html lang="en">

<head>
	<title>E-Cuti</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admintemplate/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admintemplate/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admintemplate/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admintemplate/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admintemplate/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admintemplate/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admintemplate/assets/img/favicon.png')}}">
	@yield('header')
</head>
<body>
	<!-- WRAPPER -->
	
		<!-- NAVBAR -->
		@include('layout.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layout.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admintemplate/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admintemplate/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admintemplate/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admintemplate/assets/scripts/klorofil-common.js')}}"></script>
	@yield('footer')
</body>

</html>