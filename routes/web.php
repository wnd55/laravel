<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Получение всех продуктов
Route::get('product', 'ProductController@index');
//Создание продкукта через приложение
Route::post('product', 'ProductController@createProduct');
//Изменение
Route::get('product/{id}', 'ProductController@updateProduct');
//Удаление
Route::post('product/{id}', 'ProductController@deleteProduct');


