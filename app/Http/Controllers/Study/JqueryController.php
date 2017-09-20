<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JqueryController extends Controller
{
    // Jquery-Form 序列化表单提交
    public function JqueryForm(Request $request){

        // 判断 POST 是否提交
        if ($_POST){

            // 接收字符串实例： name=陈小龙&age=29&sex=男&height=170
            $string = $request->input('string');

            // Url字符串,转换数组
            parse_str($string,$array);

            // 移除数组两种方法：unset($array['name'],$array['age']);
           // $result = array_except($array,['age','height']);

           // dd($result);

            return [
                'data'=> $array,
                'status_code'=> "0000",
                'messages'=> "success",
            ];

        }

        return view('study.jquery-form');

    }
}
