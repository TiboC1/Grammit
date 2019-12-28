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

Route::get('/users/{id}', function($id){
    return "This is user" . $id . "with an id of " . $id;
});
*/

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/p', 'PostsController@create');

Auth::routes();

