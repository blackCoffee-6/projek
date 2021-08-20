<?php

use App\FUP;
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
Route::post('/SubmitRegistration', 'UserController@Register');
Route::get('/registerview', 'UserController@getBidang');

//Route untuk melihat register dan login page
Route::view('/login','/login');

Route::view('/', 'welcome');

Route::view('/review', 'review');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----Route Form Usulan Perubahan-----//
Route::resource('FUP', 'FUPController');

//untuk mengambil dan melihat data form usulan perubahan
Route::get('/approve', 'ApproveController@index');
Route::get('/lihat-data/{id}', 'ApproveController@edit');
Route::post('/store/{id}', 'ApproveController@store');

//-----Route USER-----//
Route::resource('user', 'UserController');

//----- Route Bidang ------//
Route::get('/List/Data/Bidang', 'BidangController@index');
Route::get('/Hapus/Data/Bidang/{id}', 'BidangController@destroy');

//-----Route Tanggapan-----//
Route::post('/Store/Tanggapan/{id}', 'TanggapanController@store');
Route::resource('Tanggapan', 'TanggapanController');
Route::get('List/Menanggapi/{id}','TanggapanController@showDetail');

//--------Route Kajian----------//
Route::get('/Detail/Kajian/{fup_id}', 'KajianController@show');
Route::post('/Store/Kajian/{fup_id}', 'KajianController@store');
Route::get('/Edit/Kajian/{kajian_id}', 'KajianController@edit');
Route::put('/Update/Kajian/{kajian_id}', 'KajianController@update');
Route::get('/List/Kajian', 'KajianController@index');
// ini buat list yang ada di menunggu kajian
Route::get('/List/Menunggu/Kajian', 'KajianController@listKajian');
Route::get('/Baca-kajian/{id}', 'KajianController@bacaKajian');

//--------Route Kontrol Perubahan----------//
Route::get('/List/KP', 'KopController@index');
Route::get('/Detail/KP/{fup_id}', 'KopController@show');
Route::post('/Store/KP/{fup_id}', 'KopController@store');
Route::get('/List/Kontrol/Perubahan', 'KopController@listKop');
Route::get('/Baca-KontrolPerubahan/{kop_id}', 'KopController@bacaKop');
Route::get('/Edit/KP/{kontrol_id}', 'KopController@edit');
Route::put('/Update/KP/{kontrol_id}', 'KopController@update');

//--------Route Dashboard Usulan Perubahan------------------//
Route::get('/Dashboard/TotalUP', 'FUPController@totalIndex');
//--------Route Dashboard Rejected Usulan Perubahan------------------//
Route::get('/Dashboard/Rejected', 'FUPController@rejectedIndex');
//--------Route Dashboard Closed Usulan Perubahan------------------//
Route::get('/Dashboard/Closed', 'FUPController@closedIndex');
//--------Route Dashboard Closed Usulan Perubahan------------------//
Route::get('/Dashboard/Proses', 'FUPController@prosesIndex');

Route::get('/list-up', function () {
    return view('list-usulan');
});

//--------Route Report Usulan Perubahan----------//
Route::get('/Report/UP', 'ReportController@index');
Route::get('/cetak-pdf/{fup_id}', 'FUPController@cetak');
//--------Route Report Kajian--------------------//
Route::get('/Report/Kajian', 'ReportController@indexKajian');
Route::get('/Report/Kajian/Export/{id}', 'KajianController@export');
//--------Route Report Kontrol Perubahan---------//
Route::get('/Report/KontrolPerubahan', 'ReportController@indexKop');
Route::get('/Report/KontrolPerubahan/Export/{id}', 'KOPController@export');
//--------Route Report Rekaptulasi--------------//
Route::get('/Report/Rekap', 'ReportController@rekapExport');
Route::get('/Report/LihatRekap', 'ReportController@rekapIndex');
Route::get('/searchRek', 'ReportController@rekapIndex');

//--------Route for searching FUP in Approve Blade--------//
Route::get('/searchApp', 'ApproveController@indexSearch');
//--------Route for searching FUP in Tanggapan Blade-----//
Route::get('/searchTang', 'TanggapanController@indexSearch');
//--------Route for searching FUP in Kajian Blade--------//
Route::get('/searchKaj', 'KajianController@indexSearch');
Route::get('/searchKaj2', 'KajianController@indexSearch2');
//--------Route for searching FUP in Kontrol Perubahan Blade--------//
Route::get('/searchKop', 'KopController@indexSearch');
Route::get('/searchKop2', 'KopController@indexSearch2');
