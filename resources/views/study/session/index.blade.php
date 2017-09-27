@include('include._header')

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
        @include('include._column')
    </div>
</div>

@include('include._footer')