<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Lấy danh sách sản phẩm
Route::get('recipes', 'Controller_recipe@index');

// Lấy thông tin sản phẩm theo id
Route::get('recipes/{id}', 'Controller_recipe@show');

// Thêm sản phẩm mới
Route::post('recipes', 'Controller_recipe@store');

// Cập nhật thông tin sản phẩm theo id
# Sử dụng put nếu cập nhật toàn bộ các trường
Route::post('recipes/{id}', 'Controller_recipe@update');

// Xóa sản phẩm theo id
Route::delete('recipes/{id}', 'Controller_recipe@destroy');
