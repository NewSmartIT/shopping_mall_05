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
    return view('layouts.frontend.home');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::group(['prefix' => 'brand', 'namespace' => 'backend'], function () {
        Route::get('/', 'BrandController@index')->name('admin.brand.index');
        Route::get('data', ['as' => 'admin.brand.json', 'uses' => 'BrandController@dataJson']);
        Route::any('fill-data/{id}', ['as' => 'admin.brand.fillData', 'uses' => 'BrandController@fillData']);
        Route::any('save-brand', ['as' => 'admin.brand.saveAddBrand', 'uses' => 'BrandController@saveBrand']);
        Route::get('destroy/{id}', ['as' => 'admin.brand.destroy', 'uses' => 'BrandController@destroy']);
        Route::post('many-delete', ['as' => 'admin.brand.manyDelete', 'uses' => 'BrandController@brandDeletes']);
    });
});
