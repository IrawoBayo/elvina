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

/* Front End */


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCates');
Route::get('/contact',function(){

	return view('front.contact');

});

Route::get('/productDetail/{id}', 'HomeController@detailPro');
Route::get('/cart','CartController@index');

Route::get('/cart/addItem/{id}','CartController@addItem');

Route::put('/cart/update/{id}','CartController@update');

Route::get('/cart/remove/{id}','CartController@destroy');

Route::get('checkout','CheckoutController@index');


// Must Login first

Route::group(['middleware'=>'auth'], function() {

	Route::get('/admin.index','ProductController@index');

	Route::get('/admin.product.index','ProductController@index');

	Route::get('/admin.product.create','ProductController@create');

	Route::get('/profile','ProfileController@index');

	Route::get('/orders','ProfileController@orders');

	Route::get('/address','ProfileController@address');

	Route::post('/updateAddress','ProfileController@updateAddress');

	Route::get('/password','ProfileController@password');

	Route::put('/updatePassword','ProfileController@updatePassword');

	Route::get('/WishList', 'HomeController@View_wishlist');

	Route::post('addToWishList', 'HomeController@addWishList')->name('addToWishList');

});


/* Front End */


/* For Admin */


Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function () {


	// Route::get('/',function() {
	// return view ('admin.index');


	// });

	Route::resource('product','ProductController');

	Route::resource('category','CategoriesController');

	Route::post('/formvalidate','CheckoutController@address');

	




});


