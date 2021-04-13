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
// Vendor routes

Route::group(['namespace'=>'Users\Admin','prefix'=>'admin'],function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('test/add','AdminController@testadd');
    Route::get('test/view','AdminController@testview');
    Route::resource('halls','HallsController');//Done
    Route::resource('events','EventsController');//Done
    //Task1;
    Route::get('yaMshl',function (){
       $number = rand(0,1);
       $names = ['martina','mohamed'];
       return $names[$number];
    });
});

