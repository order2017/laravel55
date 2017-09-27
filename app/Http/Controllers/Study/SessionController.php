<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{

    /**
     * 二维数组查询方法
     * @param $array
     * @param $getId
     * @return mixed
     */
    protected function arraySelect($array,$getId){

       $result = array_filter($array, function($value) use ($getId) {

            return $value['id'] == $getId;

        });

        return $result;

    }

    // 创建数据
    protected function database(){
         return [

            [ 'id'=>1, 'name'=>'联想电脑', 'price'=>'3999', 'img'=>'/assets/1.jpg','created_at'=>'2017-09-26 13:20:56' ],
            [ 'id'=>2, 'name'=>'苹果电脑', 'price'=>'6999', 'img'=>'/assets/2.jpg','created_at'=>'2017-09-26 13:20:20' ],
            [ 'id'=>3, 'name'=>'索尼电脑', 'price'=>'4999',  'img'=>'/assets/3.jpg','created_at'=>'2017-09-26 13:20:36' ],
            [ 'id'=>4, 'name'=>'戴尔电脑', 'price'=>'5999',  'img'=>'/assets/4.jpg','created_at'=>'2017-09-26 13:20:08' ],

        ];
    }

    // 商品页面
    public function index(){

        $data = $this->database();

        return view('study.session.index',['result'=>$data]);

    }

    // 加入购物车页面
    public function cat(){

        $data = session('data');
        return view('study.session.cat',['data'=>$data]);

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
                "goodsInfo"=>$this->arraySelect($this->database(),$_GET['id']),
            );
        }

        // session中追加数据
        $request->session()->put('data', $data);

        return redirect("/session-cat");

    }

    // 清楚Session
    public function clear(){

        session()->forget('data');

        // 清除表单序列化里面的数据
        session()->forget('string');
        session()->forget('result');

        return redirect()->back();

    }

}
