<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('provider','ProviderController@CreateProvider')->name('CreateProvider');
Route::get('provider','ProviderController@Getallprovider')->name('GetProvider');
Route::put('provider','ProviderController@Updateprovider')->name('Updateprovider');
Route::get('provider','ProviderController@Getbyid')->name('Getbyid');