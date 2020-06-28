<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [
    'as' => 'home_path',     //Route name
    'uses' => 'PagesController@home'    //Controller's function
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/artisan', [
    'as' => 'artisan_path',
    'uses' => 'PagesController@artisan'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'MessagesController@create'
]);
