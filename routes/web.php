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



Route::get('login_user', function () {
    return view('website.login');
});

Route::post('login_user','UserController@getLoginCredentials')->name('login_user');

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
// show users
Route::get('users_list','UserController@users_list');

//Edit user
Route::get('edit_user',function (){
    return view('admin.edit_profile');
})->name('edit_user');

//Delete user
Route::get('delete_user','UserController@delete_user')->name('delete_user');
Route::get('master', function () {
    return view('admin.layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// wa

Route::get('/add-role','HomeController@add_role');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    Route::get('/', 'TimelinePostController@index')->name('timelinepost.index');
    Route::post('/timelinepost','TimelinePostController@store')->name('timelinepost.store');
    Route::patch('/timelinepost/{timelinePost}','TimelinePostController@update')->name('timelinepost.updatePost');
    Route::delete('/timelinepost/{timelinePost}','TimelinePostController@destroy')->name('timelinepost.deletePost');

    Route::post('/comment/{id}','TimelinePostController@storeComment')->name('timelinepost.storeComment');
    Route::patch('/comment/{comment}','TimelinePostController@updateComment')->name('timelinepost.updateComment');
    Route::delete('/comment/{comment}','TimelinePostController@destroyComment')->name('timelinepost.deleteComment');


});


Route::get('/role-list','RoleController@index');
