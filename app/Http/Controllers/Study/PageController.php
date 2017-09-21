<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    // 数组简单的数组分页
    public function page(){

        // 创建数组
        $data = [

            [ 'id'=>1, 'name'=>'三星', 'created_at'=>'2017-09-21 09:33:36' ],
            [ 'id'=>2, 'name'=>'苹果', 'created_at'=>'2017-09-21 11:33:58' ],
            [ 'id'=>3, 'name'=>'华为', 'created_at'=>'2017-09-21 10:33:36' ],
            [ 'id'=>4, 'name'=>'小米', 'created_at'=>'2017-09-21 10:33:38' ],
            [ 'id'=>5, 'name'=>'欧珀', 'created_at'=>'2017-09-21 10:33:56' ],
            [ 'id'=>6, 'name'=>'委琐', 'created_at'=>'2017-09-21 10:33:58' ],

        ];

        // 判定Url地址参数
        if(!isset($_GET['page'])){

            // 默认定义1
            $page = 1;

        }else{

            // 接收URL GET 参数值
            $page=$_GET['page'];

            // 点击上一页相减
            $Pre = $page-1;

            // 点击下一页相加
            $Next = $page+1;

        }

        // 每页显示的记录数
        $size=3;

        // 总页数，ceil()函数用于求大于数字的最小整数
        $num = ceil(count($data) / $size);

        // 用array_slice(array,offset,length) 函数在数组中根据条件取出一段值;array(数组),offset(元素的开始位置),length(组的长度)
        $new_array = array_slice($data, ($page-1)*$size, $size);

        // 循环分页数据
        for($i=0;$i<count($new_array);$i++){

            echo $new_array[$i]['name']."====".$new_array[$i]['created_at']."<br/>";

        }

        // 判定GET分页参数
        if(!isset($_GET['page']) || $_GET['page']<=1){

            echo "<a href='/page?page=1'>首页</a>";

        }else{

            echo "<a href='/page?page={$Pre}'>上一页</a>";
        }

        // 判定GET分页参数
        if(!isset($_GET['page']) || $_GET['page']>=$num) {

            echo "<a href='/page?page={$num}'>尾页</a>";

        }else{

            echo "<a href='/page?page={$Next}'>下一页</a>";
        }

    }

}
