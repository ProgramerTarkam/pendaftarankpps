<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PendidikanController;
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
    return view('home');
});

Route::get('/sesi/index',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/register',[SessionController::class,'register']);
Route::post('/sesi/store',[SessionController::class,'store']);

Route::get('/dasboard',[DataController::class,'dasboard']);
Route::get('/data/create',[DataController::class,'create']);
Route::post('/data/store',[DataController::class,'store']);
Route::get('/data',[DataController::class,'show']);
Route::get('/{nik}/edit',[DataController::class,'edit']);
Route::put('/data/{nik}',[DataController::class,'update']);
Route::delete('/data/{nik}',[DataController::class,'destroy']);
Route::get('/pdf/{nik}',[DataController::class,'view_pdf']);

Route::get('/inputdata/{nik}',[PendidikanController::class,'creatependidikan']);
Route::get('/pendidikan/getid',[PendidikanController::class,'getid']);
Route::post('/pendidikan/store',[PendidikanController::class,'storependidikan']);
Route::get('/pendidikan',[PendidikanController::class,'showpendidikan']);
Route::get('/{id}/pendidikan/edit',[PendidikanController::class,'editpendidikan']);
Route::delete('/pendidikan/{nik}/{jenjang}',[PendidikanController::class,'destroy_pendidikan']);
Route::delete('/pekerjaan/{nik}/{pekerjaan}',[PendidikanController::class,'destroy_pekerjaan']);
Route::delete('/karya/{nik}/{judul}',[PendidikanController::class,'destroy_karya']);
Route::delete('/organisasi/{nik}/{namaOrganisasi}',[PendidikanController::class,'destroy_organisasi']);

Route::post('/pekerjaan/store',[PendidikanController::class,'storepekerjaan']);

Route::post('/karyatulis/store',[PendidikanController::class,'storekarya']);

Route::post('/organisasi/store',[PendidikanController::class,'storeorganisasi']);

Route::get('/kembali',[PendidikanController::class,'kembali']);

