<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<!-- Tell the browser to be responsive to screen width -->
	<link rel="icon" href="{{ asset('icon/lam128.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('icon/lam128.ico') }}" type="image/x-icon" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Plugin CSS -->
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
	<!-- Bootstrap date Picker -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
	@yield('link-header')
	<!-- Main CSS -->
	<!-- Custom style -->
	<link rel="stylesheet" href="{{ asset('adminLTE/css/custom.css') }}">
	@yield('css')
</head>
<body>
	@include('home.layout.header')
	@yield('content')
	@include('home.layout.footer')
	<!-- Plugin JS -->
	<!-- jQuery 3.2.1 -->
	<script src="{{ asset('plugins/jQuery/dist/jquery.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Bootbox -->
	<script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('adminLTE/js/app.js') }}"></script>
	<script>
		$(function () {
			@yield('js')
		})
	</script>
</body>
</html>
