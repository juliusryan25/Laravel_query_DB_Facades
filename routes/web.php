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

Route::get('/profile',function (){
    return view('profile');
    
});
Route::get('/experience',function (){
    return view('experience');
    
});

Route::get('/portofolio',function (){
    return view('portofolio');
    
});

Route::get('/siswa','SiswaController@index');

Route::get('/simpansiswa','SiswaController@insertSiswa');
Route::get('/updatesiswa','SiswaController@updateSiswa');
Route::get('/deletesiswa','SiswaController@deleteSiswa');

