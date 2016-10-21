<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('posts', 'PostController', ['except' => ['create']]); // done
Route::resource('users', 'UserController'); // done
Route::resource('comments', 'CommentController', ['except' => ['create', 'show']]);

// search
Route::get('search', 'UserController@search');

// password reset
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');

// login
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// profile
Route::get('profile/{id}/timeline', 'UserController@profileTimeline');
Route::get('profile/{id}/about', 'UserController@profileAbout');
Route::get('about/{id}/edit', 'AboutController@edit');
Route::put('about/{id}', 'AboutController@update');

// images
Route::get('images/{folder}/{id}', 'FileController@getImage');
Route::post('images/{folder}/{id}', 'FileController@postImage');

// ajax
Route::get('ajax/create/{view}', 'AjaxController@getCreate');
Route::post('ajax/create/{view}', 'AjaxController@postCreate');
Route::get('ajax/show/{view}/{id?}', 'AjaxController@getShow');
Route::get('ajax/{activity}/{id}', 'AjaxController@getActivity');
Route::post('ajax/com', 'AjaxController@com');

// students
Route::get('/', 'HomeController@index'); // done
Route::get('home', 'HomeController@home')->name('home'); // done

// register
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');
