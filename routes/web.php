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
    return view('welcome');

});

Route::get('/test',function(){
	
});

Route::get('template',function(){
	return view('template_gallery');
});
Route::get('/creditCardDesign', ['as' => 'creditCardDesign' , 'uses' => 'WebController@creditCardDesign']);
