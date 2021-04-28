<?php

use Illuminate\Support\Facades\Auth;
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

//-----Route User----//
//Route untuk register
Route::post('/SubmitRegistration', 'userController@Register');
Route::get('/registerview', 'userController@getBidang');

//Route untuk melihat register dan login page
Route::get('/login', function () {
    return view('/login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/review', function () {
    return view('review');
});

<<<<<<< HEAD
Route::get('/List/Tanggapan', function () {
    return view('list-tanggapan');
});

//-------Route Kontrol Perubahan------//
Route::get('/List/KP', 'KopController@index');
Route::get('/Detail/KP/{fup_id}', 'KopController@show');
Route::get('/List/Kontrol/Perubahan', function () {
    return view('showKontrol');
});

Route::get('/list-up', function () {
    return view('list-usulan');
});

=======
>>>>>>> 0b506beb59dfe69d43c636fd81fd1e216ed45c09
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----Route Form Usulan Perubahan-----//
Route::resource('FUP', 'FUPController');

//untuk mengambil dan melihat data form usulan perubahan
Route::get('/approve', 'ApproveController@index');
Route::get('/lihat-data/{id}', 'ApproveController@edit');
Route::post('/store/{id}', 'ApproveController@store');

//-----Route USER-----//
Route::resource('user', 'userController');

//----- Route Bidang ------//
Route::get('/List/Data/Bidang', 'BidangController@index');
Route::get('/Hapus/Data/Bidang/{id}', 'BidangController@destroy');

//-----Route Tanggapan-----//
Route::post('/Store/Tanggapan/{id}', 'TanggapanController@store');
Route::resource('Tanggapan', 'TanggapanController');
Route::get('List/Menanggapi/{id}','TanggapanController@showDetail');

//--------Route Kajian----------//
Route::get('/Detail/Kajian/{fup_id}', 'KajianController@show');
Route::get('/List/Kajian', 'KajianController@index');
Route::post('/Store/Kajian/{fup_id}', 'KajianController@store');
Route::get('/Edit/Kajian/{kajian_id}', 'KajianController@edit');
Route::put('/Update/Kajian/{kajian_id}', 'KajianController@update');
// ini buat list yang ada di menunggu kajian
Route::get('/List/Menunggu/Kajian', 'KajianController@listKajian');
Route::get('/Baca-kajian/{id}', 'KajianController@bacaKajian');
// Route::resource('Kajian', 'KajianController');

//--------Route Kontrol Perubahan----------//
Route::get('/List/KP', 'KopController@index');
Route::get('/Detail/KP/{fup_id}', 'KopController@show');
Route::post('/Store/KP/{fup_id}', 'KopController@store');