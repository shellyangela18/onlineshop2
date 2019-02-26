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
    return view('home');
});
Route::get('/produk', function () {
    return view('halaman daftar produk');
});
Route::get('/detail-produk/{id?}', function ($id = 10) {
    return view('halaman detail produk', array('id => $id'));
});
Route::get('/keranjang', function () {
    return view('halaman keranjang');
});
Route::get('/checkout', function () {
    return view('halaman checkout');
});

