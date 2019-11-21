@extends('admin.master')

@section('css')

<style type="text/css">
	.right{
		float:right;
	}
	.left{
		float:left;
	}
	.dataTables_length{
		display: none;
	}
	.dataTables_filter{
		display: none;
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
		<div class="box-header" style="padding:0px 10px;">
			<h5 class="right">Số lượng: <strong class="label label-warning"><?php if(!empty($allPatient)) echo count($allPatient); else echo '0';  ?></strong></h5>	
		</div>
		<div class="box-body">
			<form method="post" class="lamcoder-form-dark">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
                            <label>Tên bệnh nhân</label>
                            <input type="text" name="fullname" class="form-control" value="{{ !empty($input['fullname']) ? $input['fullname'] : '' }}" placeholder="Nhập tên bệnh nhân...">
                        </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ !empty($input['phone']) ? $input['phone'] : '' }}" placeholder="Nhập số điện thoại...">
                        </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Địa chỉ</label>
							<select class="form-control select2" style="width: 100%;">
								<option selected="selected">Alabama</option>
								<option {{ !empty($user->gender) && $user->gender == 2 ? 'selected' : '' }}>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Giới tính</label>
							<select class="form-control select2" name="sex" style="width: 100%;">
								<option value="">Tất cả</option>
								<option value="1" {{ !empty($input['sex']) && $input['sex'] == '1' ? 'selected' : ''  }}>Nam</option>
								<option value="2" {{ !empty($input['sex']) && $input['sex'] == '2' ? 'selected' : ''  }}>Nữ</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
					$start_date = date('d/m/Y');
					$end_date = date('d/m/Y');
					if (!empty($input['start_date'])) {
					  	$start_date = $input['start_date'];
					}
					if(!empty($input['end_date'])) {
					  	$end_date = $input['end_date'];
					}
					?>
					<div class="col-md-3">
						<div class="form-group">
							<label>Khám từ ngày:</label>
							<div class="input-group date">
								<div class="input-group-addon">
								  <i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="start_date" id="datepicker" value="{{ $start_date }}">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Đến ngày:</label>
							<div class="input-group date">
								<div class="input-group-addon">
								  <i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="end_date" id="datepicker1" value="{{ $end_date }}">
							</div>
						</div>
					</div>
					<div class="col-md-11">
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Tìm kiếm">
							<a href="#" class="btn btn-default">Xóa lọc</a>
						</div>
					</div>
					<div class="col-md-1">
						<div class="form-group">
							@if (isset($list) && sizeof($list) > 0) 
	                        <?php 
	                            $uri = $_SERVER['REQUEST_URI']; 
	                            if (strpos($uri, '?')) {
	                                $uri = $uri.'&export=true';
	                            } else {
	                                $uri = $uri.'?export=true';
	                            }
	                        ?>
	                        <a href="{{ $uri }}" class="btn btn-success pull-right" type="submit" style="margin-top: 25px; padding: 6px 6px;"><i class="fa fa-cloud-download"></i> Excel</a>
	                        @endif
						</div>
					</div>
				</div>
			</form>
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
					<tr>
						<td><input type="checkbox" name="toggle" id="checkall" onclick="toggle(this)"></td>
						<td>Internet
						  Explorer 4.0
						</td>
						<td>Win 95+</td>
						<td> 4</td>
						<td>X</td>
						<td>Win 95+</td>
						<td> 4</td>
						<td>
							<a href="@{{ route('admin.user.edit').'/'.$user['id'] }}" class="btn btn-warning btn-sm" title="Chỉnh sửa người dùng">
									<span class="fa fa-edit"></span> Sửa
								</a>
						</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="toggle" id="checkall" onclick="toggle(this)"></td>
						<td>Internet
						  Explorer 5.0
						</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
						<td>Win 95+</td>
						<td>5</td>
						<td><a href="@{{ route('admin.user.edit').'/'.$user['id'] }}" class="btn btn-warning btn-sm" title="Chỉnh sửa người dùng">
									<span class="fa fa-edit"></span> Sửa
							</a>
						</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="toggle" id="checkall" onclick="toggle(this)"></td>
						<td>Internet
						  Explorer 5.5
						</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td>A</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td><a href="@{{ route('admin.user.edit').'/'.$user['id'] }}" class="btn btn-warning btn-sm" title="Chỉnh sửa người dùng">
									<span class="fa fa-edit"></span> Sửa
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection