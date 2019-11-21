@extends('admin.master')

@section('css')
@endsection

@section('content')

<form method="post">
	<section class="content">
    <a href="{{ route('admin.user.index') }}" class="btn btn-default btn-sm" title="Back"><i class="fa fa-angle-left"></i> Back</a>
    <button type="submit" class="btn btn-success btn-sm" title="Save"><i class="fa fa-search"></i> Save</button>
    <a href="#" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-refresh"></i> Refresh</a>
    <div class="box box-default" style="margin-top: 10px">
        <div class="box-header with-border">
            <h3 class="box-title">Select2</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
        	<div class="lamcoder-form-dark">
				{{ csrf_field() }}
	            <div class="row">
	                <div class="col-md-3">
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
							<label class="control-label">Tên đăng nhập:<small></small></label>
                            <input type="text" class="form-control" name=""  value="{{ !empty($input['username']) ? $input['username'] : $user->username }}" disabled placeholder="Nhập...">
                        </div>
	                </div>
                    <div class="col-md-3 {{ !empty($errors->first('fullname')) ? 'has-error' : ''}}">
                        <div class="form-group">
							<label class="control-label" for="fullname">Tên người dùng:<small></small></label>
							<input type="text" class="form-control" name="fullname" id="fullname" value="{{ !empty($input['fullname']) ? $input['fullname'] : $user->fullname }}" placeholder="Nhập tên người dùng">
							<span class="error">{{ $errors->first('fullname') }}</span>
                        </div>
                    </div>


	                <?php
						$birthday = date('d-m-Y');
						if (!empty($input['birthday'])) {
						 	$birthday = date('d-m-Y',strtotime($input['birthday']));
						}elseif(!empty($user->birthday)){
							$birthday = date('d-m-Y',strtotime($user->birthday));
						}
					?> 
                    <div class="col-md-3 {{ !empty($errors->first('birthday')) ? 'has-error' : ''}}">
                        <div class="form-group">
							<label class="control-label" for="birthday">Ngày sinh:</label>
							<div class="input-group date">
								<div class="input-group-addon">
								  <i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="birthday" id="datepicker" value="{{ $birthday }}">
							</div>
							<span class="error">{{ $errors->first('birthday') }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 {{ !empty($errors->first('phone')) ? 'has-error' : ''}}">
                        <div class="form-group">
							<label class="control-label" for="phone">Số điện thoại:</label>
							<input type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone" value="{{ !empty($input['phone']) ? $input['phone'] : $user->phone }}">
							<span class="error">{{ $errors->first('phone') }}</span>
                        </div>
                    </div>
	            </div>
	            <div class="row">
                	<?php
						$sex = '1';
						if (!empty($input['sex'])) {
						 	$sex = $input['sex'];
						}elseif(!empty($user->sex)){
							$sex = $user->sex;
						}
					?>
                    <div class="col-md-3 {{ !empty($errors->first('sex')) ? 'has-error' : ''}}">
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control select2" name="sex" style="width: 100%;">
                                <option value="1" {{ ($sex == '1') ? 'selected' : '' }}>Nam</option>
                                <option value="2" {{ ($sex == '2') ? 'selected' : '' }}>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 {{ !empty($errors->first('address')) ? 'has-error' : ''}}">
                        <div class="form-group">
							<label class="control-label" for="address">Địa chỉ:</label>
							<input type="text" class="form-control" id="address" placeholder="Địa chỉ" value="{{ !empty($input['address']) ? $input['address'] : $user->address }}" name="address">
							<span class="error">{{ $errors->first('address') }}</span>
                        </div>
                    </div>
	            </div>
            </div>
        </div>
    </div>
	</section>
</form>
@endsection

@section('script')
@endsection