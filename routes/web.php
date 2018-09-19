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

//Auth::routes();


Route::get('/', ['uses' => "App\StaticsController@showHome"]);
Route::get('/logout', function (){
    if (Auth::check()){
        Auth::logout();
        return redirect()->back();
    }
})->name('logout');


Route::get('/login', ['uses' => "Auth\LoginController@showLoginForm"]);
Route::post('/login', ['uses' => "Auth\LoginController@login"]);
//Route::get('/register', ['uses' => "Auth\RegisterController@showRegistrationForm"]);
Route::post('/register', ['uses' => "Auth\RegisterController@register"]);
Route::post('/password/request', ['uses' => "Auth\ForgotPasswordController@showLinkRequestForm"]);


//FILES
Route::prefix('/file')->group(function () {
    
    Route::get('/create', ["uses" => "App\Files\FilesController@create"]);
    Route::get('/account', ["uses" => "App\Files\FilesController@showUserFile"]);
    Route::get('/{filename}', ["uses" => "App\Files\FilesController@showAFile"])->where('filename', '^[^/]+$');
    Route::post('/', ["uses" => "App\Files\FilesController@postFile"]);
    Route::get('/get/{token}/{password}', 'Admin\FileController@downloadFile');
});
//Example de route

//USER
Route::get('/account/user/{id}/password', ['uses' => "App\User\UserController@c"]);



