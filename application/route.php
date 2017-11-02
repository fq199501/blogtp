<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
use think\Route;
// 注册路由到home模块的Index控制器的操作
Route::rule('index','home/index/index');
Route::rule('about','home/index/about');
Route::rule('learn','home/index/learn');
Route::rule('news','home/index/news');
Route::rule('riji','home/index/riji');
Route::rule('shuo','home/index/shuo');
Route::rule('xc','home/index/xc');
Route::rule('guestbook','home/index/guestbook');

// 注册路由到admin模块的Index控制器的操作
Route::rule('admin/index','admin/index/index');
Route::rule('admin/design','admin/index/design');
Route::rule('admin/insert','admin/index/insert');
Route::rule('admin/login','admin/index/login');
Route::rule('admin/system','admin/index/system');

// 注册路由到admin模块的UserType控制器的操作
//Route::rule('user/login','admin/UserType/login');

