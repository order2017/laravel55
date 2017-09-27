@include('include._header')

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">

            <div class="page-header">
                <h3>一维数组模糊查询 <small>{{ count($result) }} 条</small></h3>
            </div>

            <div class="input-group">
                <input type="text" class="form-control" value="" name="key">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="button">Go!</button>
                </span>
            </div>

            <br>

            <table class="table table-bordered">
                <?php $i=0; ?>
                @foreach($result as $val)
                        <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $val }}</td>
                </tr>
                @endforeach
            </table>

<pre>
    $orders = [

       '1'=>'三星手机',
       '2'=>'苹果手机',
       '3'=>'华为手机',

    ];
</pre>

        </div>
        @include('include._column')
    </div>

    <script type="text/javascript">
        $("#button").click(function () {

            var key = $("input[name=key]").val();

            if (key == ""){
                alert("不能为空");
                return false;
            }

            window.location.href="/search?key="+key;

        });
    </script>

    {{ dd($result) }}

</div>

@include('include._footer')