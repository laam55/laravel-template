@extends('admin.master')

@section('css')
@endsection
@section('content')
<form method="post">
	<section class="content">
    <a href="{{ route('admin.user.index') }}" class="btn btn-default btn-sm" title="Back"><i class="fa fa-angle-left"></i> Back</a>
    <button type="submit" class="btn btn-success btn-sm" title="Save"><i class="fa fa-search"></i> Save</button>
    <a href="{{ route('admin.user.create') }}" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-refresh"></i> Refresh</a>
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
							<label class="control-label" for="username">Tên đăng nhập:<small></small></label>
	                        <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control" placeholder="Nhập...">
							<span class="error">{{ $errors->first('username') }}</span>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('fullname')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="fullname">Tên người dùng:<small></small></label>
							<input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" id="fullname" placeholder="Nhập tên người dùng">
							<span class="error">{{ $errors->first('fullname') }}</span>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('password')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="password">Mật khẩu: <span class="text-success lamcoder-btn-show" id="password-btn-show">(show)</span></label>
							<input type="password" class="form-control"  id="password" name="password" value="{{ old('password') }}" placeholder="Nhập mật khẩu">
							<span class="error">{{ $errors->first('password') }}</span>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('password_confirmation')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="password_confirmation">Nhập lại mật khẩu: <span class="text-success lamcoder-btn-show" id="password_confirmation-btn-show">(show)</span></label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Nhập lại mật khẩu">
							<span class="error">{{ $errors->first('password_confirmation') }}</span>
	                    </div>
	                </div>
	            <!-- /.col -->
	            </div>
	            <?php
					$birthday = date('d-m-Y');
					if (!empty($input['birthday'])) {
					  $birthday = $input['birthday'];
					}
				?> 
	            <div class="row">
	                <div class="col-md-3 {{ !empty($errors->first('birthday')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="birthday">Ngày sinh:</label>
							<div class="input-group date">
								<div class="input-group-addon">
								  <i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker" name="birthday" value="{{ old('birthday') }}">
							</div>
							<span class="error">{{ $errors->first('birthday') }}</span>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('phone')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="phone">Số điện thoại:</label>
							<input type="text" class="form-control" id="phone" value="{{ old('phone') }}" placeholder="Số điện thoại" name="phone" value="">
							<span class="error">{{ $errors->first('phone') }}</span>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('sex')) ? 'has-error' : ''}}">
	                    <div class="form-group">
	                        <label>Giới tính</label>
	                        <select class="form-control select2" name="sex" style="width: 100%;">
	                            <option value="1" selected>Nam</option>
	                            <option value="2">Nữ</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="col-md-3 {{ !empty($errors->first('address')) ? 'has-error' : ''}}">
	                    <div class="form-group">
							<label class="control-label" for="address">Địa chỉ:</label>
							<input type="text" class="form-control" id="address" value="{{ old('address') }}" placeholder="Số điện thoại" name="address">
							<span class="error">{{ $errors->first('address') }}</span>
	                    </div>
	                </div>
	                <!-- /.col -->
	            </div>
            </div>
        </div>
    </div>
	</section>
</form>
@endsection

@section('script')
<script>
	
	showPassword('password');
	showPassword('password_confirmation');
</script>
@endsection