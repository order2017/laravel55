<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>数组按照某个时间字段排序</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css" rel="stylesheet">
        html,body{
            margin: 10px 13% 100px 13%;
        }
    </style>
</head>
<body>

<table class="table table-bordered">
    <caption><h4>数组按照某个时间字段排序</h4></caption>
    <thead>
    <tr>
        <th>名称</th>
        <th>时间</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $list)
    <tr>
        <td>{{ $list['name'] }}</td>
        <td>{{ $list['created_at'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

<pre>
    // 创建数组
    $data = [

        [ 'id'=>1, 'name'=>'三星', 'created_at'=>'2017-09-21 09:33:36' ],
        [ 'id'=>2, 'name'=>'苹果', 'created_at'=>'2017-09-21 11:33:58' ],
        [ 'id'=>3, 'name'=>'华为', 'created_at'=>'2017-09-21 10:33:36' ],
        [ 'id'=>4, 'name'=>'小米', 'created_at'=>'2017-09-21 10:33:38' ],
        [ 'id'=>5, 'name'=>'欧珀', 'created_at'=>'2017-09-21 10:33:56' ],
        [ 'id'=>6, 'name'=>'委琐', 'created_at'=>'2017-09-21 10:33:58' ],

    ];
</pre>

{{ dd($result) }}

</body>
</html>