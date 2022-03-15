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
Route::get('/search',[\App\Http\Controllers\AdminController::class, 'searchParts']);

//Edit
Route::get('/edit/{id}',[\App\Http\Controllers\AdminController::class, 'editParts'])->name('edit');
Route::post('/edit/{id}',[\App\Http\Controllers\AdminController::class, 'updateParts'])->name('update');

//DELETE
Route::delete('/detele/{id}', [\App\Http\Controllers\AdminController::class, 'deleteParts'])->name('delete');

//Add Data
Route::get('addPart',  [\App\Http\Controllers\AdminController::class, 'addParts'])->name('addParts');
Route::post('/addPart',  [\App\Http\Controllers\AdminController::class, 'addData'])->name('addData');