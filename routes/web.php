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

//Route untuk menampilkan list data user
Route::get('/List/Data/User', 'userController@getListUser');
//Route untuk menghapus user
Route::get('/Hapus/Data/User{id}', 'userController@deleteUser');
//Route untuk menuju ke edit profil user
Route::get('/Edit/User/{id}', 'userController@connectDataUser');
//Route untuk mengupdate profil user
Route::post('/Update/User/{id}', 'userController@updateUser');
//-------------------------------------//

//----- Route Bidang ------//
//Route untuk menampilkan list Bidang
Route::get('/List/Data/Bidang', 'BidangController@getBidang');
//Route untuk menghapus bidang
Route::get('/Hapus/Data/Bidang/{id}', 'BidangController@destroy');
//-------------------------------------//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/control', function () {
    return view('control');
});


Route::get('/tanggapan', function () {
    return view('tanggapan');
});

Route::get('/kajian', function () {
    return view('kajian');
});

Route::get('/kontrol', function () {
    return view('perubahan');
});

Route::get('/list-up', function () {
    return view('list-usulan');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----Route Form Usulan Perubahan-----//
//untuk mengambil dan menyimpan form usulan perubahan
Route::get('/usulan', 'FUPController@show');
Route::post('/usulan/store', 'FUPController@store');

//untuk mengambil dan melihat data form usulan perubahan
Route::get('/approve', 'ApproveController@index');
Route::get('/lihat-data/{id}', 'ApproveController@show');

//untuk mengambil dan melihat data form usulan perubahan pada list-usulan.blade
Route::get('/List/Usulan Perubahan', 'ApproveController@indexListFUP');
//-------------------------------------//