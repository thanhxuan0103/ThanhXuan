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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AuthSignIn', function () {
    return view('AuthSignIn');
});

Route::get('/AuthSignUp', function () {
    return view('AuthSignUp');
});

Route::get('/PageListProduct', function () {
    return view('PageListProduct');
});


Route::get('/PageEditProduct', function () {
    return view('PageEditProduct');
});

Route::get('/PageAddProduct', function () {
    return view('PageAddProduct');
});

Route::get('/PageListCategory', function () {
    return view('PageListCategory');
});

Route::get('/PageAddCategory', function () {
    return view('PageAddCategory');
});

Route::get('/PageListSale', function () {
    return view('PageListSale');
});

Route::get('/PageListSale', function () {
    return view('PageListSale');
});

Route::get('/PageAddSale', function () {
    return view('PageAddSale');
});

Route::get('/PageListPurchase', function () {
    return view('PageListPurchase');
});

Route::get('/PageAddPurchase', function () {
    return view('PageAddPurchase');
});

Route::get('/PageListReturn', function () {
    return view('PageListReturn');
});

Route::get('/PageAddReturn', function () {
    return view('PageAddReturn');
});

Route::get('/PageListCustomers', function () {
    return view('PageListCustomers');
});

Route::get('/PageAddCustomers', function () {
    return view('PageAddCustomers');
});

Route::get('/PageListUsers', function () {
    return view('PageListUsers');
});

Route::get('/PageAddUsers', function () {
    return view('PageAddUsers');
});

Route::get('/UserProfile', function () {
    return view('UserProfile');
});

Route::get('/UserProfileEdit', function () {
    return view('UserProfileEdit');
});

Route::get('/AddUser', function () {
    return view('AddUser');
});

Route::get('/Test', function () {
    return view('Test');
});

Route::get('/ModalXDPM', function () {
    return view('ModalXDPM');
});