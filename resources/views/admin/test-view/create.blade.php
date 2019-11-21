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
    <section class="content">
        <a href="#" class="btn btn-default btn-sm" title="Back"><i class="fa fa-angle-left"></i> Back</a>
        <a href="#" class="btn btn-success btn-sm" title="Save"><i class="fa fa-search"></i> Save</a>
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
                            <div class="form-group">
                                <label>Minimal</label>
                                <input type="text" id="" class="form-control" name="input" value="{{ old('input') }}" placeholder="Nhập...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
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

                        <?php
                            $start_date = date('d/m/Y');
                            if (!isset($input['start_date']) && !isset($input['end_date'])) {
                              $start_date = date('d/m/Y');
                            } elseif (isset($input['start_date'])) {
                              $start_date = $input['start_date'];
                            }
                        ?> 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="birthday">Ngày sinh:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="birthday" value="{{ $start_date }}">
                                </div>
                                <span class="error">{{ $errors->first('birthday') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
                                <input type="text" id="" class="form-control" name="input" value="{{ old('input') }}" placeholder="Nhập...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
                                <input type="text" id="" class="form-control" name="input" value="{{ old('input') }}" placeholder="Nhập...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
                                <input type="text" id="" class="form-control" name="input" value="{{ old('input') }}" placeholder="Nhập...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimal</label>
                                <input type="text" id="" class="form-control" name="input" value="{{ old('input') }}" placeholder="Nhập...">
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