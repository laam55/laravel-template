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
<form method="post">
    <div class="content">
        <a href="#" class="btn btn-default btn-sm" title="Refresh"><i class="fa fa-angle-left"></i> Back</a>
        <a href="#" class="btn btn-success btn-sm" title="Save"><i class="fa fa-search"></i> Save</a>
        <a href="#" class="btn btn-info btn-sm" title="Refresh"><i class="fa fa-refresh"></i> Refresh</a>
        <div class="box box-success" style="margin-top: 10px">
            <div class="box-body" style="padding-top: 10px">
                    {{ csrf_field() }}
                    <div class="col-md-9 col-xs-12">
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Tiêu đề sản phẩm:<small></small></label>
                            <input type="text" id="username" class="form-control" name="username" value="{{ !empty(old('username')) ? old('username') : '$user->username' }}"  placeholder="Số lượng...">
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Mô tả sản phẩm:<small></small></label>
                            <textarea type="text" id="username" rows="6" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Số lượng..."></textarea>
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Chi tiết sản phẩm:<small></small></label>
                            <textarea type="text" id="username"  rows="6" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Số lượng..."></textarea>
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Hình ảnh sản phẩm:<small></small></label>
                            <input type="file" id="username" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Số lượng...">
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Số lượng:<small></small></label>
                            <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Số lượng...">
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Danh mục:<small></small></label>
                            <select id="" class="form-control select2" name="" value="" multiple="multiple" data-placeholder="Danh mục..."
                                style="width: 100%;">
                                <option>Alabama</option>
                                <option {{ !empty($user->gender) && $user->gender == 2 ? 'selected' : '' }}>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">
                            <label class="control-label" for="username">Tình trạng:<small></small></label>
                            <select class="form-control select2" name="parent_id">
                                <option value="0">Mới</option>
                                <option value="0">Cũ</option>
                                @foreach ([] as $m)
                                    @if($m->id != $menu->id)
                                    <option value="{{ $m->parent_id }}" {{ ($m->id == $menu->parent_id) ? 'selected' : '' }} >
                                        {{ $m->menu_title }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="form-group {{ !empty($errors->first('username')) ? 'has-error' : ''}}">

                            <label class="control-label" for="username">Giá:<small></small></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Giá...">
                            </div>
                            <span class="error">{{ $errors->first('username') }}</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
@endsection