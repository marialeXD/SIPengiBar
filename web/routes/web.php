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
    return view('pages.login');
});

Auth::routes();
Route::middleware("auth")->group(function () {
    Route::get('/home', function(){
        return view('pages.dashboard');
    })->name("home");
    
    Route::get('/user','UserController@index')
        ->name("user");
    Route::post("/user/simpan",'UserController@simpan')
        ->name("user.update");

    Route::get('/status/form', function(){
        return view('pages.status.form');
    })->name("status.form");

    Route::resource('kurir','KurirController');

    Route::resource('transaksi','TransaksiController');
    Route::resource('status', 'StatusController');

    Route::get('wilayah/list',"WilayahController@wilayahlist")->name("wilayah.list");
    Route::get('wilayah/form',"WilayahController@wilayahform")->name("wilayah.form");

    Route::resource('barang', 'BarangController');
    Route::get('wilayah/list',"WilayahController@wilayahlist")->name("wilayah.list");
    Route::get('wilayah/form',"WilayahController@wilayahform")->name("wilayah.form");

});

Route::get("/register",function(){
    return view('pages.register');
})->name("register")->middleware("guest");
Route::get("/login",function(){
    return view('pages.login');
})->name("login")->middleware("guest");