<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HideController extends Controller
{
    // Jquery 隐藏显示
    public function hide(){

        return view('study.hide.hide');

    }

}
