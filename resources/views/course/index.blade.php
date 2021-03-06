<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links div {
            width:200px;
            height:200px;
            float: left;
            margin-right: 10px;
            text-align: center;
            line-height:200px;
            border:1px solid #ccc;
        }
        .links div:last-child{
            margin-right: 0px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">登录</a>
            <a href="{{ url('/register') }}">注册</a>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            课程体系
        </div>

        <div class="links">
            <div>
                <a href="{{ url('webcourse') }}">前端</a>
            </div>
            <div>
                <a href="{{ url('designcourse') }}">设计</a>
            </div>
            <div>
                <a href="{{ url('backcourse') }}">后端</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>


