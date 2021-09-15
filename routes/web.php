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


/* General Routes */
Route::get('/', function () {return view('index');});
Route::get('/company', 'CompanyController@index')->name('company');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/services', 'ServiceController@index')->name('services');


/* Admin Routes */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth','prefix' => 'admin'], function(){
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
	Route::resource('/clients','Admin\ClientsController');
	Route::resource('/offices','Admin\OfficesController');
	Route::resource('/products','Admin\ProductsController');
	Route::resource('/project-categories','Admin\ProjectCategoriesController');
	Route::resource('/projects','Admin\ProjectsController');
	Route::resource('/services','Admin\ServicesController');
	Route::resource('/settings','Admin\SettingsController');
	Route::resource('/smtp','Admin\SmtpSettingsController');
	Route::resource('/testimonials','Admin\TestimonialsController');
});