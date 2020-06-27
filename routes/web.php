<?php

use Illuminate\Support\Facades\Route;

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

Route::get('test', function(){
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('post/{post}', 'PostsController@show');

Route::get('/',  function(){
    return view('welcome');
});

Route::get('/contact',  'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/about',  function(){
    return view('about', [
        'articles' => App\Article::latest()->get()
    ]);
});

Route::get('/articles',  'ArticlesController@index')->name('articles.index');
Route::post('/articles',  'ArticlesController@store');
Route::get('/articles/create',  'ArticlesController@create');
Route::get('/articles/{article}',  'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit',  'ArticlesController@edit');
Route::put('/articles/{article}',  'ArticlesController@update');
