<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//------------------------------------------------------


// URL地址参数转换数组
Route::get('/test1',function (){

    // name=陈小龙&age=29&sex=男&height=170

    $string = "name=陈小龙&age=29&sex=男&height=170";

    parse_str($string,$array);

    unset($array['name'],$array['age']);

    //$res = array_except($array,['sex','height']);

    dd($array);

});


// 赋值子数组
Route::get('/test2',function (){

    $array = [
        ['name' => '习近平','age'=>'58','add'=>'陕西省'],
        ['name' => '李克强','age'=>'56','add'=>'安徽省'],
        ['name' => '张德江','age'=>'54','add'=>'辽宁省'],
        ['name' => '俞正声','age'=>'54','add'=>'浙江省'],
        ['name' => '刘云山','age'=>'52','add'=>'山西省'],
        ['name' => '王岐山','age'=>'70','add'=>'山西省'],
        ['name' => '张高丽','age'=>'50','add'=>'福建省'],
    ];

    $name = [
        ['name'=>'陈小龙','age'=>'29','add'=>'江西省']
    ];

    foreach ($array as $list){

        $list['parent'] = $name;

    }

    dd($list);

   // dd(array_merge($array,$name));

});


//
Route::get('/test3',function (){


    //echo $this->apply(1);

    Class Tests {

       /*public function apply($lesson){
            return array_map([$this,'trans'],$lesson);
        };

       public function trans(){
            return [
                'title' => '陈小龙',
                'age' => 29,
            ];
        }*/

    }


});