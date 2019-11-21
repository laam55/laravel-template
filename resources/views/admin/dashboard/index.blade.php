@extends('admin.master')

@section('css')

<style type="text/css">
	.right{
		float:right;
	}
	.left{
		float:left;
	}
	.fa{
		color:white;
	}
</style>

@endsection

@section('content-header')
<section class="content-header">
	<h1>
		Trang chủ
		<small>Home</small>
	</h1>
	<ul class="breadcrumb ">
		<li>
			<a href="{{ url('') }}"><i class="fa fa-dashboard"></i> Home</a>
		</li>
		<li class="active">Trang chủ</li>
	</ul>
</section>
@endsection
@section('content')
<section class="content">
	<p style="text-align: center">Trang Dashboard</p>
</section>
@endsection

@section('script')
@endsection