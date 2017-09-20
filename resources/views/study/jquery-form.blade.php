<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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

    $("#queRen").click(function(){

        str = $("formAdd").serialize();

        alert(str);

    });

</script>

</body>
</html>