@extends('admin.master')

@section('css')

<style type="text/css">
	.right{
		float:right;
	}
	.left{
		float:left;
	}
</style>

@endsection

@section('content-header')
	<section class="content-header">
		<h1>
			Chi tiết bài viết
			<small>Control panel</small>
		</h1>
		<ul class="breadcrumb ">
			<li>
				<a href="{{ url('') }}"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Chi tiết bài viết</li>
		</ul>
	</section>
@endsection
@section('content')
<div class="content">
	<div class="box box-success">
		<div class="box-header">	
			<a href="" class="btn btn-danger btn-sm" title="Quay lại"><i class="fa fa-arrow-circle-o-left"></i> Quay lại</a>
		</div>
		<div class="box-body">
			<table>
				<tr>
					<td><strong>Tiêu đề</strong>:</td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Tiêu đề</strong>:</td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Ngày tạo</strong>:</td>
					<td></td>
				</tr>
			</table>
			<div>
				
			</div>
			<a href="" style="margin-top:10px" class="btn btn-danger btn-sm" title="Quay lại"><i class="fa fa-arrow-circle-o-left"></i> Quay lại</a>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection