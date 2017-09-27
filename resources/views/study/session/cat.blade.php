@include('include._header')

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
        @include('include._column')
    </div>

    <pre>
        return [

            [ 'id'=>1, 'name'=>'联想电脑', 'price'=>'3999', 'img'=>'/assets/1.jpg','created_at'=>'2017-09-26 13:20:56' ],
            [ 'id'=>2, 'name'=>'苹果电脑', 'price'=>'6999', 'img'=>'/assets/2.jpg','created_at'=>'2017-09-26 13:20:20' ],
            [ 'id'=>3, 'name'=>'索尼电脑', 'price'=>'4999',  'img'=>'/assets/3.jpg','created_at'=>'2017-09-26 13:20:36' ],
            [ 'id'=>4, 'name'=>'戴尔电脑', 'price'=>'5999',  'img'=>'/assets/4.jpg','created_at'=>'2017-09-26 13:20:08' ],

        ];
    </pre>

    {{ dd($data) }}

</div>

@include('include._footer')