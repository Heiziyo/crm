@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title panel-danger">
                            黑子
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="cover"><img  class="img-responsive" src="/images/cover.png" alt="" width="260" height="210"></div>
                        <button type="button" class="btn btn-primary btn-lg btn-block " style="margin-top: 10px">封面编辑(规格560*420)</button>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="/css/designcss.css">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="uploadBox">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection