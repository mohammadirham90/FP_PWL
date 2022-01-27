<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\KembaliController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\RouteGroup;

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


//Login
Route::get('/login',function(){
        return view('login');
})->name('login');
Route::post('/postLogin','App\Http\Controllers\LoginController@postLogin')->name('postLogin');
Route::get('/Logout','App\Http\Controllers\LoginController@Logout')->name('Logout');

Route::group(['middleware'=>['auth']],function(){
        Route::get('/','App\Http\Controllers\AnggotaController@data');
        
});
// Form anggota
Route::get('/add','App\Http\Controllers\AnggotaController@add');
Route::post('/','App\Http\Controllers\AnggotaController@addProces');
Route::get('/edit/{id}','App\Http\Controllers\AnggotaController@edit');
Route::patch('/{id}','App\Http\Controllers\AnggotaController@editproses');
Route::delete('/{id}','App\Http\Controllers\AnggotaController@delete');

// Form buku
Route::get('/buku','App\Http\Controllers\BukuController@data');
Route::get('/addbuku','App\Http\Controllers\BukuController@add');
Route::post('/buku','App\Http\Controllers\BukuController@addproses');
Route::get('/editbuku/{id}','App\Http\Controllers\BukuController@editbuku');
Route::patch('buku/{id}','App\Http\Controllers\BukuController@editbukuproses');
Route::delete('buku/{id}','App\Http\Controllers\BukuController@deletebuku');

Route::resource('pinjam',PinjamController::class);
Route::resource('kembali',KembaliController::class);