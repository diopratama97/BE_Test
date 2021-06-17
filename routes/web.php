<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Candidate;
use App\Http\Controllers\Dropdown;
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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/',[Dashboard::class,'dataDashboard']);

Route::get('/form_registrasi', function () {
    return view('form_registrasi');
});

Route::post('/form_registrasi/insert',[Candidate::class,'insert']);

// Route::get('/data_activity', function () {
//     return view('data_activity');
// });
Route::get('/data_activity',[Candidate::class,'dataKandidat'])->name('kandidat');
Route::get('/agama',[Dropdown::class,'agama'])->name('agama');

// Route::get('/data_activity_detail', function () {
//     return view('data_activity_detail');
// });
Route::get('/data_activity_detail/{id}',[Candidate::class,'dataKandidatbyId']);

// Route::get('/data_activity_edit', function () {
//     return view('data_activity_edit');
// });
Route::get('/data_activity_edit/{id}',[Candidate::class,'edit']);
Route::post('/data_activity_edit/update',[Candidate::class,'update']);