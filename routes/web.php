<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.home_index');
});

Route::any('user/register_form','User\UserController@store');
Route::get('user_register','User\UserController@index');
Route::get('user/list_user','User\UserController@show');
Route::get('user_detail/{id?}','User\UserController@view');
Route::get('user/login_form','User\UserController@login');
Route::post('user/login','User\UserController@login_user');
