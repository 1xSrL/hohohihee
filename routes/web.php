<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;

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
// 127.0.0.1:8000/ ==> view welcome
// Route::get('/', function () {
//     return view('welcome');
// });

// // 127.0.0.1:8000/siswa ==> <h1>SAYA JERAPAH</h1>
// Route::get('/siswa', function () {
//     return "<h1>SAYA JERAPAH</h1>";
// });

//
// // 127.0.0.1:8000/siswa/1 ==> <h1>SAYA JERAPAH DENGAN ID 1</h1>
// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>SAYA JERAPAH DENGAN ID $id</h1>";
// })->where('id','[0-9]+');

//
// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>SAYA JERAPAH DENGAN ID $id & NAMA $nama</h1>";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

Route::get('siswa',[SiswaController::class,'index']);
Route::get('siswa/{id}',[SiswaController::class,'detail'])->where('id', '[0-9]+');

Route::get('/',[HalamanController::class,'index']);