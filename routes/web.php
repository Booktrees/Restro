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

Route::get('/','HomeController@index');
Auth::routes();

Route::get('/about','HomeController@about');
Route::get('/menu','HomeController@menu');
Route::get('/menu/{category}','HomeController@menu');
Route::get('/menu/{category}/{menu}','MenuController@show');
Route::post('/cart','CartController@store');

Route::get('/reservation','BookingsController@create');
Route::get('/reservation/{booking}','BookingController@show')->name('booking.show');
Route::post('/reservation','BookingsController@store');

Route::get('/cart/{cart}','CartController@show')->name('cart.show');
Route::get('/cart/{cart}/edit','CartController@edit');
Route::post('/cart/{cart}/edit','CartController@update');
Route::post('/cart/{cart}','CartController@destroy');
// SHOW BILL
Route::get('/cart/{cart}/bill','CartController@showbill');
// Route::get('/cart/{category}','CartController@create');

// Route::post('/','HomeController@storemenu');

Route::get('/cart','HomeController@cart');


// Route::get('/{category}','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home/{category}', 'HomeController@index')->name('home');
Route::get('users/logout','Auth\LoginController@userlogout')->name('user.logout');

// Route::get('/home','MenuController@index');

Route::get('/asd','HomeController@view');

Route::prefix('admin')->group( function() {
	//FOR AUTHENTICATION
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	
	Route::get('/register','AdminController@create');
	Route::post('/register','AdminController@update');


	//Menu Uploading 
	Route::get('/menu','MenuController@display');
	Route::get('/tablemenu','MenuController@view');
	Route::get('/addmenu','MenuController@create');
	Route::post('/addmenu','MenuController@store');

	//EditMenu
	Route::get('/editmenu/{menu}','MenuController@edit');
	Route::post('/editmenu/{menu}','MenuController@update');

	//DeleteMenu
	Route::post('/deletemenu/{menu}','MenuController@destroy');


	// Route::get('/menu','PagesController@menu');
	// Route::get('/menutwo','PagesController@menutwo');
	// Route::get('/menuthree','PagesController@menuthree');

	//Order and booking
	Route::get('/orderlist', 'PagesController@orderlist');
	Route::get('/booking','BookingsController@view');


	Route::get('/category','PagesController@showcateg');
	Route::get('/addcateg','PagesController@createcateg');
	Route::post('/addcateg','PagesController@storecateg');

	//User Information
	Route::get('/userinfo','PagesController@userinfo');

	Route::get('admininfo','PagesController@admininfo');
	
	//Admin Logout
	Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

	//FOR NAVIGATION

});  

