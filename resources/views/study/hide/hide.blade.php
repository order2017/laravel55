<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>实例</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .row {
            margin-top: 80px;
        }
        #que_ren{
            display: none;
        }
        #pre,#box_name{
            width: 80%;
        }
        .form-control {
            display: inline;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">实例</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="javascript:;">首页</a></li>
                <li><a href="#about">关于我们</a></li>
                <li><a href="#contact">联系方式</a></li>--}}
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">

            @for($i=1;$i<=3;$i++)
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="输入名称" id="box_name">
                <button class="btn btn-success" id="que_ren" onclick="edit(this)">确认</button>
            </div>
            @endfor

            <br>
            <pre id="pre" class="msg">

            </pre>
        </div>
        @include('include._column')
    </div>
</div>

<script type="text/javascript">

    // 鼠标移入确认按钮展示 第一种方法

    $("input[type=text]").focus(function(){

        $("button").hide();

        $(this).next("button").show();

    });

    // 鼠标移入确认按钮展示 第二种方法

    /*$("#box_name").focus(function(){

        $("#que_ren").hide();

        $(this).next("#que_ren").show();

    });*/

    function edit(obj) {

        var username = $(obj).prev("input").val();

        if (username==""){

            alert("名称不能为空");

            return false

        }

        $.post('/hide',{'_token':'{{ csrf_token() }}',name:username},function (data) {

           // console.log(data);

            $('.msg').text(data);

        },"text");

    }

</script>

</body>
</html>