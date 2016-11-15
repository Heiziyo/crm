@extends('layouts.head')
@section('content')
    <div class="container-fluid mycontainer">
        <div class="header">
            <div class="myMenu pull-left">
                <ul>
                    <li><a href="">消息</a></li>
                    <li class="activetag"><a href="{{ url('team') }}">项目组</a></li>
                </ul>
            </div>
            <div class="myD pull-right">
                ddd
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-2">
            <div class="row">
                <div class="panel panel-danger" style="height: 800px;">
                   <div class="panel-heading">
                        <h3 class="panel-title">
                            我的项目组 <i class="glyphicon glyphicon-plus pull-right " style="cursor:pointer"></i>
                        </h3>
                    </div>
                    <div class="panel-body">
                        面板内容
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="panel panel-danger" style="height: 800px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        我的项目组
                    </h3>
                </div>
                <div class="panel-body">
                    面板内容
                </div>
            </div>
        </div>
    </div>
    <script src="/layui/layui.js" ></script>
    <script>

        //一般直接写在一个js文件中
        layui.use(['layer', 'form'], function(){
            var layer = layui.layer
                    ,$ = layui.jquery
                    ,form = layui.form();
            $("#addGroup").on('click',function () {
                layer.msg(22)
            })

        });
    </script>
@endsection


