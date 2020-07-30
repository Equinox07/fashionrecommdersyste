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

Route::get('/', 'Home\HomeController@index');

Route::get('/product/fabric', function(){
    return view('home.product');
})->name('fabric.product');

Route::get('/product/recommend', function(){
    return view('home.recommendation');
})->name('fabric.recommend');


Route::get('/admin/manage', function(){
    return view('admin.home');
})->name('admin_home');

Route::get('/admin/categories', 'Category\CategoryController@index')->name('admin.categories');
Route::get('/category/save', 'Category\CategoryController@create')->name('category.create');
Route::post('/category/save', 'Category\CategoryController@store')->name('category.save');


Route::get('/admin/properties', 'Property\PropertyController@index')->name('admin.properties');
Route::get('/properties/save', 'Property\PropertyController@create')->name('properties.create');
Route::post('/properties/save', 'Property\PropertyController@store')->name('properties.save');


Route::get('/admin/uses', 'Uses\UsesController@index')->name('admin.uses');
Route::get('/uses/save', 'Uses\UsesController@create')->name('uses.create');
Route::post('/uses/save', 'Uses\UsesController@store')->name('uses.save');



Route::post('/fabric/recommed', 'Fabric\FabricController@store')->name('fabric.recommend');
// Route::get('/fabric/recommed', 'Uses\UsesController@store')->name('uses.save');


// Route::get('/category', 'Admin\AdminController@cat');

// Route::get('/product', 'Admin\AdminController@pro');