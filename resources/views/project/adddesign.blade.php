@extends('layouts.app')


@section('content')
    <link rel="stylesheet" href="/css/designcss.css">
    <div class="myDesing">
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
                        <button type="button" id="picker" class="btn btn-primary btn-lg btn-block " style="margin-top: 10px">封面编辑(规格560*420)</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="uploadBox center-block">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="/webuploader-0.1.5/webuploader.css">
    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
    <!--引入JS-->
    <script type="text/javascript" src="/webuploader-0.1.5/webuploader.js"></script>
    <script>
        var uploader = WebUploader.creat({
            // swf文件路径
            swf: BASE_URL + '/js/Uploader.swf',

            // 文件接收服务端。
            server: 'http://webuploader.duapp.com/server/fileupload.php',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#picker',

            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false
        });
    </script>
@endsection