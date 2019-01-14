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

//文章列表
Route::get('/posts','\App\Http\Controller\PostController@index');

//文章详情
Route::get('/posts/{post}','\App\Http\Controller\PostController@show');

//创建文章
Route::get('/posts/create','\App\Http\Controller\PostController@create');
Route::get('/posts/save','\App\Http\Controller\PostController@save');

//编辑文章
Route::get('/posts/edit','\App\Http\Controller\PostController@edit');
Route::get('/posts/update','\App\Http\Controller\PostController@update');

//删除文章
Route::get('/posts/delete','\App\Http\Controller\PostController@delete');
