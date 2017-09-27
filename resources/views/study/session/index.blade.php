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
        .page-header {
            margin: 0px 0 20px;
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

            <div class="page-header">
                <h3>商品页面</h3>
            </div>

            <div class="row" style="margin-top: 10px;">
                @foreach($result as $key=>$value)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $value['img'] }}" alt="{{ $value['name'] }}">
                        <div class="caption">
                            <h3>{{ $value['name'] }}</h3>
                            <p>{{ $value['price'] }} 元</p>
                            <p>
                                <input type="text" class="form-control" name="num" value="1" id="goodsNumber-{{ $value['id'] }}">
                            </p>
                            <p>
                                <a href="javascript:void(0);" class="btn btn-primary" role="button">购买</a>
                                <a href="javascript:void(0);" class="btn btn-default" role="button" id="addCar-{{ $value['id'] }}">加入购物车</a>
                                <input type="hidden" name="id" value="{{ $value['id'] }}" id="id-{{ $value['id'] }}">

                                <script type="text/javascript">
                                    $("#addCar-{{ $value['id'] }}").click(function(){

                                        // 读取商品ID
                                        var id=$("#id-{{ $value['id'] }}").val();

                                        // 库存
                                        var num=$("#goodsNumber-{{ $value['id'] }}").val();

                                        // 加入购物车
                                        window.location.href="/session-add?id="+id+"&num="+num;

                                    });
                                </script>

                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

<pre>
 return [

    [ 'id'=>1, 'name'=>'联想电脑', 'price'=>'3999', 'img'=>'/assets/1.jpg','created_at'=>'2017-09-26 13:20:56' ],
    [ 'id'=>2, 'name'=>'苹果电脑', 'price'=>'6999', 'img'=>'/assets/2.jpg','created_at'=>'2017-09-26 13:20:20' ],
    [ 'id'=>3, 'name'=>'索尼电脑', 'price'=>'4999',  'img'=>'/assets/3.jpg','created_at'=>'2017-09-26 13:20:36' ],
    [ 'id'=>4, 'name'=>'戴尔电脑', 'price'=>'5999',  'img'=>'/assets/4.jpg','created_at'=>'2017-09-26 13:20:08' ],

];
</pre>

        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <a href="javascript:;" class="list-group-item active">实例</a>
                <a href="/jquery-form" class="list-group-item">表单序列化</a>
                <a href="/time-sort" class="list-group-item">数组时间排序</a>
                <a href="/column-parent" class="list-group-item">栏目级别</a>
                <a href="/page" class="list-group-item">数组分页</a>
                <a href="/filter" class="list-group-item">过滤数组重复数据</a>
                <a href="/search" class="list-group-item">数组模糊查询</a>
                <a href="/hide" class="list-group-item">隐藏显示</a>
                <a href="/session" class="list-group-item">Session中追加数据--购物车</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>