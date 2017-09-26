<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    //Session 中追加数据--显示

    // 商品页面
    public function index(){

        $data = [

            [ 'id'=>1, 'name'=>'联想电脑', 'price'=>'3999', 'img'=>'/assets/1.jpg','created_at'=>'2017-09-26 13:20:56' ],
            [ 'id'=>2, 'name'=>'苹果电脑', 'price'=>'6999', 'img'=>'/assets/2.jpg','created_at'=>'2017-09-26 13:20:20' ],
            [ 'id'=>3, 'name'=>'索尼电脑', 'price'=>'4999',  'img'=>'/assets/3.jpg','created_at'=>'2017-09-26 13:20:36' ],
            [ 'id'=>4, 'name'=>'戴尔电脑', 'price'=>'5999',  'img'=>'/assets/4.jpg','created_at'=>'2017-09-26 13:20:08' ],

        ];

        return view('study.session.index',['result'=>$data]);

    }

    // 加入购物车页面
    public function cat(){
        dd(session('data'));
        return view('study.session.cat');

    }

    // 加入购物车页面---数据处理
    public function addCat(Request $request){

        // 数据处理
        $data=session('data')?session('data'):array();

        // 定义标注
        $a=0;
        if ($data) {
            foreach ($data as $key => &$value) {

                if ($value['id']==$_GET['id']) {

                    $value['num']=$value['num']+$_GET['num'];

                    // 跳出循环
                    $a=1;
                }
            }
        }

        if (!$a) {
            $data[]=array(
                "id"=>$_GET['id'],
                "num"=>$_GET['num'],
                "goodsInfo"=>"",
            );
        }

        // session中追加数据
        $request->session()->put('data', $data);

        return redirect("/session-cat");

    }

}
