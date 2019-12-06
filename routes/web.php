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
Route::get('/index', function () {
    return view('index');
});
Route::get('/order_list',function(){
	return view('/postman/order_list');
});

Route::get('/sample', function () {
    return view('sample');
});
Route::get('/detail', function () {
    return view('users/parcel/detail');
});
Route::get('select/location',function(){
	return view('postman/select_location');
});
Route::get('cart',function(){
	return view('product/cart');
});
Route::get('/single_product',function(){
	return view('product/single_product');
});
Route::get('/product_list',function(){
	return view('product/product_list');
});
Route::get('/json','page_controller@json');
Route::get('app/json','page_controller@app_demo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my_dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');

//admin route for our multi-auth system

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/product/detail/','admin\product_controller@product_detail')->name('parcel.detail');
    Route::get('/product/index','admin\product_controller@product_list')->name('product.list');
    Route::get('/order/history','admin\order_controller@index')->name('order.history');
    Route::get('/order/product/list','admin\order_controller@order_product_list');
    Route::get('/order/list','admin\order_controller@order_list')->name('order.list');
    Route::get('/postman/list','admin\postman_controller@postman_list')->name('postman.list');
    Route::get('/postman/profile','admin\postman_controller@postman_profile');
    Route::get('/merchant/list','admin\merchant_controller@merchant_list')->name('merchant.list');
    Route::get('/invetory','admin\product_controller@invetory')->name('invetory');

});Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});
Route::get('/','page_controller@index');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	// Chit Kaung San(parcel)
Route::get('parcel/create','user\parcel_controller@parcel_create')->name('parcel.create');
Route::get('parcel/index','user\parcel_controller@parcel_index')->name('parcel.index');
Route::get('postman/profile','postman\postman_controller@postman_profile')->name('postman.profile');
Route::get('/invoice','admin\product_controller@invoice');
Route::get('/update/profile','ProfileController@update_profile')->name('update.profile');
Route::get('/payment/transaction','payment_transaction@payment_transaction')->name('payment.transaction');
Route::get('/merchant_dash/postman/list','postman\postman_controller@merchant_dash_postman_list')->name('merchant_dash.postman.list');
 Route::get('/order/list','order_controller@order_list')->name('order.list');
 Route::get('/voucher','order_controller@voucher');
 Route::get('/wallet','wallet_controller@index');
// End Chit Kaung San
});
