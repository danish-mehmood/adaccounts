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

Auth::routes([ 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'  , 'middleware'=>['auth' , 'can:isAdmin']] , function(){
    Route::get('/',"facebookAdsController@index" )->name('dashboard');
    Route::post('/page/next',"facebookAdsController@next_paginator" )->name('next');
    Route::post('/page/prev',"facebookAdsController@prev_paginator" )->name('prev_paginator');
    Route::post('/date-filter', "facebookAdsController@filtered")->name('filtered');
    Route::post('date-filter/page/next',"facebookAdsController@next_date_paginator" )->name('next_date_paginator');
    Route::post('date-filter/page/prev',"facebookAdsController@prev_date_paginator" )->name('prev_date_paginator');
});
