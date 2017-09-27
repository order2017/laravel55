<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    // 一维数组模糊查询
    public function search(){

        // 搜索关键词
        $keywords = !empty($_GET['key']) ? $_GET['key'] : '苹果';

        // 创建一维数组
        $orders = [

           '1'=>'三星手机',
           '2'=>'苹果手机',
           '3'=>'华为手机',

        ];


        // 定义新数组，赋值空
        $arr = [];

        // 循环
        foreach($orders as $key=>$values ){

            // strstr() 函数 搜索字符串在另一字符串中的第一次出现

            if (strstr( $values , $keywords ) !== false ){

                // array_push() 函数向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度，该函数等于多次调用 $array[] = $value


                array_push($arr, $values);  // 第一种方法

               // $arr[] = $values;  // 第二种方法

            }

        }

        return view('study.search.one-search',['result'=>$arr]);

    }

}
