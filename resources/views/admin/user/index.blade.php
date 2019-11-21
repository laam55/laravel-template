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
	<a href="{{ route('admin.user.delete') }}" class="btn btn-danger btn-sm right" onClick="return false; deleteRecord()" title="delete"><i class="fa fa-remove"></i> Delete</a>
	<a href="{{ route('admin.user.index') }}" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-plus"></i> Refresh</a>
	<a href="{{ route('admin.user.index') }}" class="btn btn-warning btn-sm" title="Search"><i class="fa fa-plus"></i> Search</a>
	<a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm" title="Create"><i class="fa fa-plus"></i> Create new</a>
	<div class="box box-success" style="margin-top: 10px">
		<div class="box-body">
			<table id="" class="list-table table table-bordered table-striped table-hover">
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
					@foreach($users as $user)
					<tr>
						<td><input type="checkbox" name="check[]" value="" class="check"></td>
						<td>{{ $user->username }}</td>
						<td>{{ $user->fullname }}</td>
						<td>{{ $user->phone }}</td>
						<td>{{ !empty($user->birthday) ? date('d-m-Y',strtotime($user->birthday)) : '' }}</td>
						<td>{{ ($user->sex == '1') ? 'nam' : 'nữ' }}</td>
						<td>{{ $user->address }}</td>
						<td>
							<a href="{{ route('admin.user.edit').'/'.$user['id'] }}" class="btn btn-success btn-sm" title="Chỉnh sửa người dùng">
								<span class="fa fa-edit"></span> Sửa
							</a>
							{{-- <a onclick="deleteRow(this)" id="delete" data-href="{{ route('admin.user.delete').'/'.$user['id'] }}" class="btn btn-danger btn-sm" title="Xóa người dùng">
								<span class="fa fa-remove"></span> Xóa
							</a> --}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="custom-pagination">
				{{ $users->links() }}
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection