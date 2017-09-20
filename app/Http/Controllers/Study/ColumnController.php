<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColumnController extends Controller
{
    // 栏目-----数组创建子数组赋值
    public function ColumnParent(){

        // 一级栏目
        $mun = [
            [ 'id'=>1, 'name'=>'粤菜系' ],
            [ 'id'=>2, 'name'=>'川菜系' ],
            [ 'id'=>3, 'name'=>'湘菜系' ],
            [ 'id'=>4, 'name'=>'赣菜系' ],
        ];

        // 二级栏目----归属对应一级栏目
        $level = [
            [ 'id'=>1, 'name'=>'农家小炒肉', 'mun'=>3 ],
            [ 'id'=>2, 'name'=>'鱼香肉丝饭', 'mun'=>3 ],
            [ 'id'=>3, 'name'=>'西红柿炒蛋', 'mun'=>1 ],
            [ 'id'=>4, 'name'=>'麻辣香肠饭', 'mun'=>2 ],
            [ 'id'=>5, 'name'=>'水煮草鱼', 'mun'=>3 ],
            [ 'id'=>6, 'name'=>'豆葱煮鱼', 'mun'=>4 ],
        ];

        // 定义新数组
        $newArray=[];

        // 循环一级栏目
        foreach ($mun as $value){

            // 定义新数组赋值
            $newArray[$value['id']] = $value;

            // 定义数组，创建数组子栏目赋值
            $newArray[$value['id']]['parent']=[];

            // 循环二级栏目
            foreach ($level as $list){

                // 判断一级栏目ID和二级栏目所属栏目ID是否相等，如果相等，归属对应栏目下
                if ($value['id'] == $list['mun']){

                    // 定义数组，赋值
                    $newArray[$value['id']]['parent'][$list['id']] = $list;

                }

            }

        }

       dd($newArray);

    }

}
