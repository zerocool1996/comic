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


// Route::get('admin/signup', function(){
//     echo 'you can not sign up as a Admin';
// })->name('admin.signup');
Route::get('admin/login', 'admin\AdminController@login')->name('admin.login');

Route::post('admin/login', 'admin\AdminController@postlogin')->name('admin.post_login');

Route::get('admin/signup', 'admin\AdminController@signup')->name('admin.signup');

Route::post('admin/signup', 'admin\AdminController@postsignup')->name('admin.post_signup');

Route::get('admin/logout', 'admin\AdminController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'admin'], function(){
    //viết các route admin trong day

    Route::get('/index', 'AdminController@index')->name('admin.index');

    Route::group(['prefix' => 'user'], function(){

        Route::get('/index', 'UserController@show')->name('admin.user.show');

        Route::get('/delete/{id}', 'UserController@destroy')->name('admin.user.destroy');

        Route::get('/add','UserController@add')->name('admin.user.add');

        Route::post('/add','UserController@create')->name('admin.user.create');

        Route::get('/edit/{id}', 'UserController@edit')->name('admin.user.edit');

        Route::post('/update/{id}', 'UserController@update')->name('admin.user.update');
    });


});

