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





Route::get('/products', 'PagesController@products')->name('products');
Route::get('/product/{slug}','ProductController@show')->name('show');
Route::get('/search', 'PagesController@search')->name('search');

//categories product
//Route::get('/categories', 'CategoriesController@idex')->name('categories.index');
Route::get('/pages/categories/{id}', 'CategoriesController@show')->name('categories.show');




//product route
Route::group(['prefix'=>'admin'], function(){

    Route::get('/', 'AdminPagesController@index')->name('admin.pages.n');

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


//Brand route


Route::group(['prefix'=>'admin'], function(){


    Route::get('/brand', 'BrandController@index')->name('admin.brands');
    Route::get('/brand/create', 'BrandController@create')->name('admin.brand.create');
    Route::post('/brand/create', 'BrandController@store')->name('admin.brand.store');
    Route::get('/brand/edit/{id}', 'BrandController@edit')->name('admin.brand.edit');
    Route::post('/brand/edit/{id}', 'BrandController@update')->name('admin.brand.update');
    Route::post('/brand/delete/{id}', 'BrandController@brand_delete')->name('admin.brand.delete');

});




//Division route


Route::group(['prefix'=>'admin'], function(){


    Route::get('/division', 'DivisionController@index')->name('admin.divisions');
    Route::get('/division/create', 'DivisionController@create')->name('admin.division.create');
    Route::post('/division/create', 'DivisionController@store')->name('admin.division.store');
    Route::get('/division/edit/{id}', 'DivisionController@edit')->name('admin.division.edit');
    Route::post('/division/edit/{id}', 'DivisionController@update')->name('admin.division.update');
    Route::post('/division/delete/{id}', 'DivisionController@division_delete')->name('admin.division.delete');


});







//District route


Route::group(['prefix'=>'admin'], function(){


    Route::get('/district', 'DistrictController@index')->name('admin.districts');
    Route::get('/district/create', 'DistrictController@create')->name('admin.district.create');
    Route::post('/district/create', 'DistrictController@store')->name('admin.district.store');
    Route::get('/district/edit/{id}', 'DistrictController@edit')->name('admin.district.edit');
    Route::post('/district/edit/{id}', 'DistrictController@update')->name('admin.district.update');
    Route::post('/district/delete/{id}', 'DistrictController@district_delete')->name('admin.district.delete');



});


//User Route
Route::group(['prefix'=>'user'], function() {
    Route::get('/token/{token}', 'VerificationController@verify')->name('user.verification');
    Route::get('/dashboard', 'UsersController@dashboard')->name('user.dashboard');
    Route::get('/profile', 'UsersController@profile')->name('user.profile');
    Route::post('/profile/update', 'UsersController@profileupdate')->name('user.profile.update');
});


//Cart Route
Route::group(['prefix'=>'cart'], function(){

Route::get('/', 'CartsController@index')->name('carts');

Route::post('/store', 'CartsController@store')->name('carts.store');
Route::post('/update/{id}', 'CartsController@update')->name('carts.update');
Route::post('/delete/{id}', 'CartsController@destroy')->name('carts.delete');

});

//Checkout Route
Route::group(['prefix'=>'checkout'], function(){

    Route::get('/', 'CheckoutsController@index')->name('checkouts');

    Route::post('/store', 'CheckoutsController@store')->name('checkouts.store');

});



//Admin Route
/*Route::group(['prefix'=>'admin'], function() {
    Route::get('/', 'APagesController@index')->name('admin.index');

    //Admin Login Route
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.index');

});*/

//Admin User Login
Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
Route::post('/logout/submit', 'Admin\LoginController@logout')->name('admin.logout');
//admin password reset
/*Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');*/

//Route::get('/admin', 'APagesController@adminpage')->name('admin.adminpage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







//Route::prefix('admin')->group(base_path('routes/admin.php'));