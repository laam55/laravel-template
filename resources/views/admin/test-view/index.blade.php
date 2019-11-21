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
@section('content')

<div class="content">	
	<a href="#" class="btn btn-danger btn-sm right" title="delete"><i class="fa fa-remove"></i> Delete</a>
	<a href="#" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-refresh"></i> Refresh</a>
	<a href="#" class="btn btn-warning btn-sm" title="Search"><i class="fa fa-search"></i> Search</a>
	<a href="#" class="btn btn-primary btn-sm" title="Create"><i class="fa fa-plus"></i>  Create new</a>
	<div class="box box-primary" style="margin-top: 10px">
		<div class="box-body">
			<table id="" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="2%"><input type="checkbox" name="toggle" id="checkall" onclick="toggle(this)"></th>
						<th>Tài khoản</th>
						<th>Họ và tên</th>
						<th>Số điện thoại</th>
						<th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th width="10%">Chức năng</th>
					</tr>
				</thead>
				
				<tbody>
					@foreach([] as $user)
					<tr>
						<td><input type="checkbox" name="check[]" value="" class="check"></td>
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>
							<a href="#" class="btn btn-warning btn-sm" title="Chỉnh sửa người dùng">
								<span class="fa fa-edit"></span> Sửa
							</a>
							<a onclick="deleteRow(this)" id="delete" data-href="/" class="btn btn-danger btn-sm" title="Xóa người dùng">
								<span class="fa fa-remove"></span> Xóa
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection