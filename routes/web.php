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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::redirect('/','welcome');
Route::get('/',[\App\Http\Controllers\HitungController::class, 'home']);
Route::post('/perhitungan',[\App\Http\Controllers\HitungController::class, 'Perhitungan']);
Route::get('/perhitungan/reset',[\App\Http\Controllers\HitungController::class, 'reset']);


//CRUD
Route::get('/crud',[\App\Http\Controllers\AdminController::class, 'index'])->name('crud');

//search
Route::get('/search',[\App\Http\Controllers\AdminController::class, 'searchParts'])->name('searchPart');

//Edit
Route::get('/edit/{id}',[\App\Http\Controllers\AdminController::class, 'editParts'])->name('edit');
Route::post('/edit/{id}',[\App\Http\Controllers\AdminController::class, 'updateParts'])->name('update');

//DELETE
Route::delete('/detele/{id}', [\App\Http\Controllers\AdminController::class, 'deleteParts'])->name('delete');

//Add Data
Route::get('addPart',  [\App\Http\Controllers\AdminController::class, 'addParts'])->name('addParts');
Route::post('/addPart',  [\App\Http\Controllers\AdminController::class, 'addData'])->name('addData');

//Export & Import
Route::get('/exportAdmin',[\App\Http\Controllers\AdminController::class, 'adminExport'])->name('adminexport');
Route::post('/importAdmin', [\App\Http\Controllers\AdminController::class, 'importExcel'])->name('importExcel');

Route::get('/exportPDF', [\App\Http\Controllers\AdminController::class, 'exportPDF'])->name('exportPDF');

// Test Kecil
Route::get('/satu',[\App\Http\Controllers\SatuController::class, 'index'])->name('HalSatu');
Route::post('/satu',[\App\Http\Controllers\SatuController::class, 'HitungSatu']);

Route::get('/dua', [\App\Http\Controllers\DuaController::class, 'index'])->name('HalDua');
// Route::post('/dua', [\App\Http\Controllers\DuaController::class, 'validasiTanggal']);

Route::get('/tiga', [\App\Http\Controllers\TigaController::class, 'index'])->name('HalTiga');

Route::get('/empat', [\App\Http\Controllers\EmpatController::class, 'index'])->name('HalEmpat');

Route::get('/lima', [\App\Http\Controllers\LimaController::class, 'index'])->name('HalLima');

Route::get('/enam', [\App\Http\Controllers\EnamController::class, 'index'])->name('HalEnam');

Route::get('/tujuh', [\App\Http\Controllers\TujuhController::class, 'index'])->name('HalTujuh');

Route::get('/delapan', [\App\Http\Controllers\DelapanController::class, 'index'])->name('HalDelapan');

Route::get('/sembilan', [\App\Http\Controllers\SembilanController::class, 'index'])->name('HalSembilan');

Route::get('/sepuluh', [\App\Http\Controllers\SepuluhController::class, 'index'])->name('HalSepuluh');
