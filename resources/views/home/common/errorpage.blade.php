@extends('home.master')

@section('css')
@endsection

@section('content')
<div class="container padding20px center">
	<h2><i class="error fa fa-warning"></i> Không tìm thấy đường dẫn này</h2>
	<a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-mail-reply"></i> Quay lại trang chủ</a>
</div>

@endsection

@section('script')
@endsection