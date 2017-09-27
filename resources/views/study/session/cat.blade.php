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
                <h3>购物车页面 <small><a href="/session-clear">清空购物车</a></small></h3>
            </div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>图片</th>
                    <th>名称</th>
                    <th>价格</th>
                    <th>数量</th>
                    <th>合计</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($data))

                    <?php $total=0; ?>

                @foreach($data as $key=>$value)
                    @foreach($value['goodsInfo'] as $val)

                    <?php

                    $money=$val['price']*$value['num'];

                    $total+= $money;

                    ?>

                    <tr>
                        <td><img src="{{ $val['img'] }}" alt="" width="60"></td>
                        <td>{{ $val['name'] }}</td>
                        <td>{{ $val['price'] }}</td>
                        <td>{{ $value['num'] }}</td>
                        <td>{{ $money }} 元</td>
                        <td><a href="javascript:;"></a>删除</td>
                    </tr>

                    @endforeach
                @endforeach
                    <tr>
                        <td colspan="6" align="center">总合计：{{ $total }} 元 &nbsp;&nbsp;&nbsp;<input type="button" value="去结算" class="btn btn-primary"></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6" align="center">暂无数据</td>
                    </tr>
                @endif
                </tbody>
            </table>

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