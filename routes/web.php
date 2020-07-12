<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles','ArticlesController');

// view('フォルダ名.フォルダ名');
Route::get('hello', 'HelloController@index');