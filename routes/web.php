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
|
*/


// Main Users
Route::get('/', 'privacyController@welcome');
Route::get('/privacy-policy', 'privacyController@index');
Route::get('/login', 'CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/product-user', 'frontProductController@withdata')->name('main');
Route::get('customer/cart', 'frontProductController@cart')->middleware('auth:customer')->name('customer.cart');
Route::get('customer/sukses_order', 'frontProductController@sukses_order')->middleware('auth:customer')->name('customer.sukses_order');

Route::post('customer/store', 'CartController@store')->name('customer.store');
Route::post('customer/ordersend', 'CartController@ordersend')->name('customer.ordersend');


// Customers
Route::get('/customer/login', 'CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'CustomerLoginController@login')->name('customer.login');
Route::post('/customer/register', 'CustomerLoginController@register')->name('customer.register');
Route::get('/customer/home', 'CustomerLoginController@index')->middleware('auth:customer')->name('customer.home');
Route::get('/customer/logout', 'CustomerLoginController@logout')->name('customer.logout');




Route::group( ['middleware' => 'auth' ], function()
{
    
    // Dashoarad
    Route::get('/home', 'HomeController@index')->name('home');


    // manage user
    Route::get('users-list', 'UserController@index');
    Route::post('users-list/store', 'UserController@store')->name('user-store');
    Route::put('users-list/edit', 'UserController@edit')->name('user-edit');
    Route::get('users-list/delete/{id}', 'UserController@destroy');
    Route::get('users-list/resetpassword/{id}', 'UserController@resetpassword');


    // manage customers
    Route::get('customers-list', 'CustomerController@index');
    Route::post('customers-list/store', 'CustomerController@store')->name('customer-store');
    Route::put('customers-list/edit', 'CustomerController@edit')->name('customer-edit');
    Route::get('customers-list/delete/{id}', 'CustomerController@destroy');
    Route::get('customers-list/resetpassword/{id}', 'CustomerController@resetpassword');


    // detail users
    Route::get('customers-list/detail/{id_customers}', 'DetailUserController@index');

    
    // manage Group
    Route::get('group-list', 'GroupController@index');
    Route::post('group-list/store', 'GroupController@store')->name('group-store');
    Route::put('group-list/edit', 'GroupController@edit')->name('group-edit');
    Route::get('group-list/delete/{id}', 'GroupController@destroy');
    Route::get('group-list/resetpassword/{id}', 'GroupController@resetpassword');


    
    // manage product
    Route::get('product', 'ProductController@index');
    Route::post('product/store', 'ProductController@store')->name('product-store');
    Route::put('product/edit', 'ProductController@edit')->name('product-edit');

    Route::get('list-order', 'ProductController@listorder');
    Route::get('report-order/{order_numb}/{store_name}', 'ProductController@report_order')->name('cart-report');


   // manage list jobs
    Route::get('list-job', 'ListJobController@index');
    Route::post('list-job/store', 'ListJobController@store')->name('job-store');
    Route::put('list-job/edit', 'ListJobController@edit')->name('job-edit');

    
    
    // manage history list job
    Route::get('job-list/incoming-job/{id}', 'IncomingJobController@index');
    Route::put('job-list/incoming-job/edit', 'IncomingJobController@edit')->name('incoming-job-edit');
    Route::get('job-list/incoming-job/detail-requirement/{jobs_id}', 'DetailUserController@index');


    Route::get('/linkstorage', function () {
        Artisan::call('storage:link');
    });
    

});


Route::get('/register-mitra', function () {
    return view('auth.register-mitra');
});

Auth::routes();








