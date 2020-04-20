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
|*/


/*Route::get('/contact', function () {
    return view('/pages/contact');
});*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/search', 'PagesController@search')->name('search');


Route::get('/products', 'PagesController@products')->name('products');
Route::get('/product/{slug}','ProductController@show')->name('show');
//product route
Route::group(['prefix'=>'admin'], function(){

    Route::get('/', 'AdminPagesController@index')->name('admin.pages.n');
   // Route::get('/pages', 'AdminPagesController@index')->name('admin.pages.index');

    Route::get('/products', 'AdminPagesController@manage_products')->name('admin.products');
    Route::get('/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');
    Route::get('/product/create', 'AdminPagesController@create')->name('admin.product.create');

   Route::post('/product/create', 'AdminPagesController@product_store')->name('admin.product.store');
    Route::post('/product/edit/{id}', 'AdminPagesController@product_update')->name('admin.product.update');

    Route::post('/product/delete/{id}', 'AdminPagesController@product_delete')->name('admin.product.delete');
});

//category route


Route::group(['prefix'=>'admin'], function(){


     Route::get('/categories', 'CategoryController@index')->name('admin.categories');
    Route::get('/category/create', 'CategoryController@create')->name('admin.category.create');
    Route::post('/category/create', 'CategoryController@store')->name('admin.category.store');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
    Route::post('/category/edit/{id}', 'CategoryController@update')->name('admin.category.update');
    Route::post('/category/delete/{id}', 'CategoryController@category_delete')->name('admin.category.delete');

});
