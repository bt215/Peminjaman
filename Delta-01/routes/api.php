<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('book', 'Buku_controller@book');
Route::get('/',function(){
    return Auth::user()->levels;
})->middleware('jwt.verify');
Route::get('bookall', 'Buku_controller@bookAuth');
Route::get('user', 'UserController@getAuthenticatedUser');

Route::get('buku','Buku_controller@index')->middleware('jwt.verify');;
Route::post('buku','Buku_controller@create')->middleware('jwt.verify');;
Route::get('/buku/{id}','Buku_controller@detail')->middleware('jwt.verify');;
Route::put('/buku/{id}','Buku_controller@update')->middleware('jwt.verify');;
Route::delete('/buku/{id}','Buku_controller@delete')->middleware('jwt.verify');;

Route::get('anggota','Anggota_controller@index')->middleware('jwt.verify');;
Route::post('anggota','Anggota_controller@create')->middleware('jwt.verify');;
Route::get('/anggota/{id}','Anggota_controller@detail')->middleware('jwt.verify');;
Route::put('/anggota/{id}','Anggota_controller@update')->middleware('jwt.verify');;
Route::delete('/anggota/{id}','Anggota_controller@delete')->middleware('jwt.verify');;

Route::get('peminjaman','Peminjaman_controller@index');
Route::post('peminjaman','Peminjaman_controller@create');
Route::get('/peminjaman/{id}','Peminjaman_controller@detail');
Route::put('/peminjaman/{id}','Peminjaman_controller@update');
Route::delete('/peminjaman/{id}','Peminjaman_controller@delete');