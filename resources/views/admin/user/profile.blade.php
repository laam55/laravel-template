@extends('admin.master')
@section('content')
<section class="content">
    <a href="#" class="btn btn-default btn-sm" title="Back"><i class="fa fa-angle-left"></i> Back</a>
    <a href="#" class="btn btn-success btn-sm" title="Save"><i class="fa fa-search"></i> Save</a>
    <a href="#" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-refresh"></i> Refresh</a>
    <div class="box box-default" style="margin-top: 10px">
        <div class="box-header with-border">
            <h3 class="box-title">Profile</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form method="post" class="lamcoder-form-dark">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tên tài khoản</label>
                            <input type="text" class="form-control" name="username" value="{{$user->username}}" disabled required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}" disabled required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label" for="gender">Giới tính:</label>
                            <select id="gender" class="form-control select2" name="gender" style="width: 100%;">
                                <option value="1">Nam</option>
                                <option value="2" {{ !empty($user->gender) && $user->gender == 2 ? 'selected' : '' }}>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" min="0" name="phone" value="{{$user->phone}}" placeholder="Nhập số điện thoại" required>
                        </div>
                    </div>
                <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="address" value="{{$user->address}}" placeholder="Nhập địa chỉ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection