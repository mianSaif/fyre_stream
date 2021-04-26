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
Route::get('login_user', function () {
    return view('website.login');
});
Route::get('sign_up', function () {
    return view('website.register');
});
Route::get('started', function () {
    return view('website.started');
});

Route::get('register_data', 'UserController@register');
Route::post('update_user', 'UserController@update_user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {
    return view('admin.index');
});
Route::get('users_list', function () {
    return view('admin.users_list');
});
Route::get('edit_profile', function () {
    return view('admin.edit_profile');
});
