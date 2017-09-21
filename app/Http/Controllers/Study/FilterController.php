<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{

    // 过滤数组重复数据
    public function filter(){

        $user = [

            [ 'id'=>1, 'name'=>'陈小龙', 'created_at'=>'2017-09-21 16:05:32' ],
            [ 'id'=>2, 'name'=>'陈有根', 'created_at'=>'2017-09-20 08:16:26' ],
            [ 'id'=>3, 'name'=>'陈紫莹', 'created_at'=>'2017-09-22 08:16:26' ],

        ];

        $order = [

            [ 'id'=>1, 'name'=>'三星手机', 'price'=>'1560', 'user'=>1, 'created_at'=>'2017-09-22 08:16:26' ],
            [ 'id'=>2, 'name'=>'华为手机', 'price'=>'1830', 'user'=>1, 'created_at'=>'2017-09-22 08:56:26' ],
            [ 'id'=>3, 'name'=>'苹果手机', 'price'=>'8000', 'user'=>3, 'created_at'=>'2017-09-22 12:36:26' ],

        ];



        dd($order);

    }

}
