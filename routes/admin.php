<?php


Route::prefix('admin')->group(function () {
    Route::get('/', ['uses' => "App\AdminController@dashboard", "as" => "admin"]);
    Route::get('/login', ['uses' => "App\AdminController@showLoginAdmin"]);
    Route::get('/user', ['uses' => "App\AdminController@showAllUser"]);
    Route::get('/user/create', ['uses' => "App\AdminController@createUser"]);
    Route::get('/user/edit/{id}', ['uses' => "App\AdminController@editUser"]);
    Route::post('/user/edit/{id}', ['uses' => "App\AdminController@postEditUser"]);
    Route::get('/user/edit/delete/{id}', ['uses' => "App\AdminController@deleteUser"]);
    
    Route::post('/user/create', ['uses' => "App\AdminController@postCreateUser"]);
    Route::get('/admin/delete', ['uses' => "App\AdminController@showDeleteUser"]);
});
