@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">更新信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/upinfo') }}">
                            {{ csrf_field() }}
                            <input  type="hidden" class="form-control" name="userid" value="{{ Auth::user()->id }}" >
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">用户名</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="area" class="col-md-4 control-label">地区</label>
                                <div class="col-md-6">
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}
                                    <select name="area" id="area"  class="form-control">
                                        <option value="0">请选择地区</option>
                                        <option value="1">武汉</option>
                                        <option value="2">上海</option>
                                        <option value="3">成都</option>
                                        <option value="4">长沙</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role" class="col-md-4 control-label">职位</label>
                                <div class="col-md-6">
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}
                                    <select name="role" id="role"  class="form-control">
                                        <option value="0">请选择职位</option>
                                        <option value="1">php项目经理</option>
                                        <option value="2">前端项目经理</option>
                                        <option value="3">设计项目经理</option>
                                        <option value="4">行政</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        提交
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()