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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post-create', function () {
    return view('post-create');
})->name('post-create')->middleware('auth');

Route::post('/posts/{post}/star', 'PostController@star');
Route::get('/posts/{post}/comments', 'PostController@comments');
Route::resource('posts', 'PostController');

Route::resource('tags', 'TagController');

Route::post('/comments/{comment}/like','CommentController@like');
Route::resource('comments','CommentController');
