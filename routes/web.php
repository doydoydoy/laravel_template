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

Route::get('/', function () 
{
    return view('welcome');
});


Route::get('/home', function()
{
	return view('home');
});

Route::get('/articles', 'ArticlesController@showArticles');


/** Create Article **/ 

Route::get('/articles/create', 'ArticlesController@createArticle');

Route::post('/articles/create', 'ArticlesController@saveArticle');


/** Display Article **/

Route::get('/articles/{id}', 'ArticlesController@showArticle');


/** Delete Article **/ 

Route::get('articles/{id}/delete', 'ArticlesController@deleteArticle');


/** Edit Article **/ 

Route::get('articles/{id}/edit', 'ArticlesController@editArticle');

Route::post('articles/{id}/edit', 'ArticlesController@editSaveArticle');
