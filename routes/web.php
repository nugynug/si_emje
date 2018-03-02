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
    return redirect('/member-customer');
});
	Route::get('/tambah-member','c_member@tambah');
	Route::get('/member-customer','c_member@show');
	Route::get('/lihatin/{id}','c_member@detail');
	Route::get('/edit/{id}','c_member@edit');
	Route::post('/ubah/{id}','c_member@ubah');
	Route::post('/pendaftaran','c_member@add');

