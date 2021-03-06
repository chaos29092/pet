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

Route::get('/', function () {
    return view('home');
});

Route::get('404',function(){
    return view('errors.404');
});

Route::get('contact',function(){
    return view('page.contact');
});

Route::get('support',function(){
    return view('page.support');
});

Route::get('product',function(){
    return view('page.product');
});

Route::get('shortcode',function(){
    return view('page.shortcode');
});