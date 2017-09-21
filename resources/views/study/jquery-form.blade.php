<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jquery-Form 序列化表单提交</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css" rel="stylesheet">
        html,body{
            margin: 50px 100px 0 100px;
        }
    </style>
</head>
<body>

<form role="form" onsubmit="return false" id="formAdd" >
    <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="请输入姓名">
    </div>
    <div class="form-group">
        <label for="age">年龄</label>
        <input type="number" class="form-control" name="age" id="age" placeholder="请输入年龄">
    </div>
    <div class="form-group">
        <label for="height">身高</label>
        <input type="number" class="form-control" name="height" id="height" placeholder="请输入身高">
    </div>
    <div class="form-group">
        <label for="add">地址</label>
        <input type="text" class="form-control" name="add" id="add" placeholder="请输入地址">
    </div>
    <button type="submit" class="btn btn-default" id="queRen">提交</button>
</form>

<script type="text/javascript">

    // 定义点击事件
    $("#queRen").click(function(){

        // 判断input是否为空

        if ($("#name").val()==""){

            alert("姓名不能为空");

            return false
        }

        // 定义接收表单序列化，并且赋值
       var str = $("#formAdd").serialize();

       // 定义解码，并且赋值
        var str = decodeURIComponent(str,true);

        // POST提交数据
        $.post('/jquery-form',{string:str,'_token':'{{ csrf_token() }}'},function (data) {
            console.log(data);
        });

    });

</script>

<br>
<pre>
{{ session('string') }}
</pre>

<br>
{{ dd(session('result')) }}

</body>
</html>