@extends('layouts.head')
<link rel="stylesheet" href="/static/css/mycss.css">
@section('content')
    <div class="container-fluid  " id="mycontainer" >
        <div class="nav navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('team') }}">项目组</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>

        </div>
        <div class="container-fluid" id="mycontainer">
            <div class="row">
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">我的项目组<i class="glyphicon glyphicon-plus pull-right " id="addGroup"></i></h3>
                        </div>
                        <div class="panel-body">
                            dd
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    d
                </div>
            </div>
        </div>
    </div>



    <script src="/js/require.js" data-main="/js/main"></script>
@endsection


