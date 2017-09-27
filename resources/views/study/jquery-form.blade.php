@include('include._header')


<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">

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
            <br>
<pre>
{{ session('string') }}
</pre>

        </div>
        @include('include._column')
    </div>

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

    {{ dd(session('result')) }}

</div>

@include('include._footer')