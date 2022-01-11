<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

/**
 * 展示页
 */
Route::get('login','index/login');
/**
 * 数据返回
 */
Route::get('show','GoodsController/show');
/**
 *软删除
 */
Route::get('del','GoodsController/del');
/**
 * 回收站
 */
Route::get('only','GoodsController/only');
/**
 * 恢复
 */
Route::get('upOnly','GoodsController/upOnly');