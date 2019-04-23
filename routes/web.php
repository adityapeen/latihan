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

Route::get('/', function() {
    $nama = "OwO";
    $data =['Informatika', 'Biologi', 'Industri', 'Fisika', 'Kimia'];
    return view('home', ['prodi'=>$data], ['nama'=>$nama]);
});
Route::get('/mahasiswa', 'MahasiswaController@index');
