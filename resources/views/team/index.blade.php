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
                <div class="mLeft40 pull-left"><i class="glyphicon glyphicon-plus icon1" style="cursor:pointer"></i></div>
                <div class="mLeft40 pull-left"> <i class="glyphicon glyphicon-bell icon2" style="cursor:pointer"></i> </div>
                <div class="mLeft40 pull-left"><i class="glyphicon glyphicon-user icon3" style="cursor:pointer"></i></div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row myrow">
            <div class="col-md-2 clearpading">
                <div class="panel panel-danger mypanel">
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
            <div class="col-md-10 clearpading">
                <div class="panel panel-danger mypanel" >
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
    </div>
    <script src="/layui/layui.js" ></script>
    <script>
        //一般直接写在一个js文件中
        layui.use(['layer', 'form'], function(){
            var layer = layui.layer
                    ,$ = layui.jquery
                    ,form = layui.form();

            //业务逻辑
            



            $("#addGroup").on('click',function () {
                layer.msg(22)
            })

        });
    </script>
    
   
@endsection


