<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{

    // 数组按照某个时间字段排序
    public function TimeSort(){

        // 创建数组
        $data = [

            [ 'id'=>1, 'name'=>'三星', 'created_at'=>'2017-09-21 09:33:36' ],
            [ 'id'=>2, 'name'=>'苹果', 'created_at'=>'2017-09-21 11:33:58' ],
            [ 'id'=>3, 'name'=>'华为', 'created_at'=>'2017-09-21 10:33:36' ],
            [ 'id'=>4, 'name'=>'小米', 'created_at'=>'2017-09-21 10:33:38' ],
            [ 'id'=>5, 'name'=>'欧珀', 'created_at'=>'2017-09-21 10:33:56' ],
            [ 'id'=>6, 'name'=>'委琐', 'created_at'=>'2017-09-21 10:33:58' ],

        ];

        // 循环数组
        foreach($data as $key=>$value){

            // 格式化时间，去除斜杠和冒号，赋值，定义覆盖时间值
            $data[$key]['created_at'] = date("YmdHis",strtotime($value['created_at']));

        }

        // 定义新数组，赋值为空
        $datetime = [];

        // 循环数组
        foreach ($data as $list) {

            // 读取时间值，赋值定义数组
            $datetime[] = $list['created_at'];

        }

        // 数组按照时间降序
        array_multisort($datetime,SORT_DESC,$data);

        dd($data);

    }

}
