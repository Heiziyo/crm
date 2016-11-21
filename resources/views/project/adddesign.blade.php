@extends('layouts.app')


@section('content')
    <link rel="stylesheet" href="/css/designcss.css">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/webuploader-0.1.5/webuploader.css">
    <script src="/webuploader-0.1.5/webuploader.js"></script>
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
                        <div class="cover"><img id="cover"  class="img-responsive" src="/images/cover.png" alt="" width="260" height="210"></div>
                        {{--<button type="button"   multiple="true" class="btn btn-primary btn-lg" style="margin-top: 10px">封面编辑(规格560*420)</button>--}}
                        <!--dom结构部分-->
                        <div id="uploader-demo">
                            <!--用来存放item-->
                            <div id="fileList" class="uploader-list"></div>
                            <div id="filePicker" >封面编辑(规格560*420)</div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #filePicker_design .webuploader-pick{
                    float: left;
                    height: 210px;
                    width: 248px;
                    border: 2px dashed #b8c4ce;
                    margin: 17px;
                    background: #eff3f5;;
                    padding-top: 60px;
                    transition: border-color 0.2s ease-out;
                    cursor: pointer;
                }
                #filePicker_design strong{
                    font-size: 18px;
                    font-weight: 700;
                    color: #b8c4ce;
                    display: block;
                    text-align: center;
                }
                #filePicker_design span{
                    font-size: 12px;
                    color: #b8c4ce;
                    display: block;
                    text-align: center;
                }
            </style>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="uploadBox center-block">
                        <div id="uploader-design">
                            <!--用来存放item-->
                            <div id="fileList" class="uploader-list"></div>
                            <div id="filePicker_design" style="width: 224px; height: 206px;">
                                <strong class="tit">上传作品</strong>
                                <span class="tip">格式:JPG,PNG,GIF</span>
                                <span class="tip">大小:小于10M</span>
                                <span class="tip">可拖拽上传</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var BASE_URL = '/webuploader-0.1.5';
        // 初始化Web Uploader
        var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            // swf文件路径
            swf: BASE_URL + '/Uploader.swf',
            // 文件接收服务端。
            server: '{{ url("upcover") }}',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        // 当有文件添加进来的时候
        uploader.on( 'fileQueued', function( file ) {
            var thumbnailWidth = 260;
            var thumbnailHeight = 210;
            var $li = $('<div id="' + file.id + '" class="file-item thumbnail">' +
                            '<img>' +
                            '<div class="info">' + file.name + '</div>' +
                            '</div>'
                    ),
                    $img = $li.find('img');


            // $list为容器jQuery实例
            $('#thelist').append( $li );

            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $('#cover').attr('src',src) ;
                console.log(src)
            }, thumbnailWidth, thumbnailHeight );
        });

    </script>
    <script type="text/javascript">
        var BASE_URL = '/webuploader-0.1.5';
        // 初始化Web Uploader
        var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            // swf文件路径
            swf: BASE_URL + '/Uploader.swf',
            // 文件接收服务端。
            server: '{{ url("upcover") }}',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker_design',
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
    </script>
@endsection