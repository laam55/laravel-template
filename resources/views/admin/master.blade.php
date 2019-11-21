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
	<!-- Select2 -->
	<link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('adminLTE/dist/css/skins/_all-skins.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">

	@yield('link-header')
	<!-- Main CSS -->
	<!-- Custom style -->
	<link rel="stylesheet" href="{{ asset('adminLTE/css/custom.css') }}">
	@yield('css')
</head>
<body id="app" class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">		
		@include('admin.layouts.header')
		@include('admin.layouts.main_sidebar')
		
		<div class="content-wrapper">
			{{-- @include('admin.layout.alert') --}}
			@yield('content')
		</div>
		
		@include('admin.layouts.footer')
		@include('admin.layouts.control_sidebar')
		<div class="control-sidebar-bg"></div>
	</div>

	<!-- Plugin JS -->
	<!-- jQuery 3.2.1 -->
	<script src="{{ asset('plugins/jQuery/dist/jquery.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Bootbox -->
	<script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('plugins/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- bootstrap datepicker -->
	<script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.vi.js') }}" charset="UTF-8"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('adminLTE/dist/js/adminlte.min.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('adminLTE/js/app.js') }}"></script>
	<script>
	  	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script>
		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Date picker
			$('#datepicker').datepicker({
			  autoclose: true,
			  format: 'dd-mm-yyyy',
			  language : 'vi'
			})

			//Date picker
			$('#datepicker1').datepicker({
			  autoclose: true,
			  format: 'dd-mm-yyyy',
			  language : 'vi'
			})

			//Date picker
			$('#datepicker2').datepicker({
			  autoclose: true,
			  format: 'dd-mm-yyyy',
			  language : 'vi'
			})

			@if (Session::has('thongbao'))
			bootbox.alert({
				title:"Thông báo",
				message: "{{ session('thongbao') }}",
				size: 'small',
				buttons: {
					ok: {
						label: 'OK',
						className: 'btn-success'
					}
				},
				backdrop: true
			});
			@endif
			function deleteRecord(th = ''){
				event.preventDefault();
				bootbox.confirm({
					title:"Xác nhận",
					message:"<strong>Bạn muốn xóa!</strong>",
					size: 'small',
					buttons: {
				        confirm: {
				            label: 'Yes',
				            className: 'btn-success'
				        },
				        cancel: {
				            label: 'No',
				            className: 'btn-danger'
				        }
				    },
				    backdrop: true,
				    callback:function(result){ 
						if(result) window.location = $(th).attr('data-href');
					}
				});
			}
			$('.sidebar-toggle').click(function(){
				localStorage.setItem('sidebarCollapse', !$('#app').hasClass('sidebar-collapse'));
			})
			function showSidebarControl() {
				var sc = localStorage.getItem('sidebarCollapse')
				if (sc) 
					$('#app').addClass('sidebar-collapse')
				else {
					$('#app').removeClass('sidebar-collapse')
				}
			}
			showSidebarControl()

			@yield('js')
		})
	</script>
</body>
</html>
