<?php


Route::prefix('admin')->group(function () {
    Route::get('/', ['uses' => "App\AdminController@dashboard", "as" => "admin"]);
    Route::get('/login', ['uses' => "App\AdminController@showLoginAdmin"]);
    Route::get('/user/add', ['uses' => "App\AdminController@showAddUser"]);
    Route::get('/user/edit/{id}', ['uses' => "App\AdminController@showEditUser"]);
    Route::get('/admin/delete', ['uses' => "App\AdminController@showDeleteUser"]);
});
