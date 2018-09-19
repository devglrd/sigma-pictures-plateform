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

Route::get('/test', ['uses' => "App\StaticsController@test"]);

Route::get('/user/add', ['uses' => "App\StaticsController@showAddUser"]);

Route::get('/user/edit/{id}', ['uses' => "App\StaticsController@showEditUser"]);

Route::get('/', ['uses' => "App\StaticsController@showHome"]);

Route::get('/admin/login', ['uses' => "App\AdminController@showLoginAdmin"]);


//FILES
Route::get('/file/{filename}', ["uses" => "App\Files\FilesController@showAFile"])->where('filename', '^[^/]+$');
Route::post('/file/{filename}', ["uses" => "App\Files\FilesController@postFile"])->where('filename', '^[^/]+$');
Route::get('/get/files/{token}/{password}', 'Admin\FileController@downloadFile');

Route::get('/admin/delete', ['uses' => "App\AdminController@showDeleteUser"]);
//Example de route

//USER
Route::get('/account/user/{id}/password', ['uses' => "App\User\UserController@c"]);

Auth::routes();

