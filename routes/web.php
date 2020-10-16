<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/event', 'event/index');
Route::view('/pages/jadwal', 'jadwal_kuliah');
Route::view('/pages/kontak', 'kontak_teman');
Route::view('/pages/harga', 'price');
Route::view('/pages/stok', 'stock');
Route::view('/pages/about', 'about');
Route::view('/pages/gallery', 'gallery');
// Route::view('/pages', 'landingpage');
Route::view('/pages/contact', 'contact');
Route::resource('event', EventController::class);
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('update/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('delete/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::view('addStudent', 'student.addEvent')->name('student.create');
Route::post('create',  [StudentController::class, 'store'])->name('student.store');
// Route::resource('student', StudentController::class);

