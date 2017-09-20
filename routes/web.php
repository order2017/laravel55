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


// ---------------------------------Array--------------------------------------

// 栏目-----数组创建子数组赋值
Route::get('/column-parent','Study\ColumnController@ColumnParent');


// ---------------------------------Jquery--------------------------------------

// Jquery-Form 序列化表单提交
Route::any('/jquery-form','Study\JqueryController@JqueryForm');