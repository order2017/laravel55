<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>数组栏目子栏目</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css" rel="stylesheet">
        html,body{
            margin: 10px 20% 100px 20%;
        }
    </style>
</head>
<body>

<div class="panel-group" id="accordion">

    @foreach($result as $list)
    <div class="panel panel-primary">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse{{ $list['id'] }}">
            <h4 class="panel-title">
                {{ $list['name'] }}
            </h4>
        </div>
        <div id="collapse{{ $list['id'] }}" class="panel-collapse collapse in">
            <ul class="list-group">

                @foreach($list['parent'] as $value)
                <li class="list-group-item">{{ $value['name'] }}</li>
                @endforeach

            </ul>
        </div>
    </div>
    @endforeach

</div>

<pre>
    // 一级栏目
    $mun = [
        [ 'id'=>1, 'name'=>'粤菜系' ],
        [ 'id'=>2, 'name'=>'川菜系' ],
        [ 'id'=>3, 'name'=>'湘菜系' ],
        [ 'id'=>4, 'name'=>'赣菜系' ],
    ];

    // 二级栏目----归属对应一级栏目
    $level = [
        [ 'id'=>1, 'name'=>'农家小炒肉', 'mun'=>3 ],
        [ 'id'=>2, 'name'=>'鱼香肉丝饭', 'mun'=>3 ],
        [ 'id'=>3, 'name'=>'西红柿炒蛋', 'mun'=>1 ],
        [ 'id'=>4, 'name'=>'麻辣香肠饭', 'mun'=>2 ],
        [ 'id'=>5, 'name'=>'水煮草鱼', 'mun'=>3 ],
        [ 'id'=>6, 'name'=>'豆葱煮鱼', 'mun'=>4 ],
    ];
</pre>

{{ dd($result) }}

</body>
</html>