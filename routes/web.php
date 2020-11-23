<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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
Route::get('/', [EventController::class, 'index'])->name('index');
Route::get('student/', [StudentController::class, 'index'])->name('index');
Route::get('student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('update/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('delete/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::view('addStudent', 'student.addEvent')->name('student.create');
Route::post('create',  [StudentController::class, 'store'])->name('student.store');
// Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('user', [UserController::class, 'index'])->name('index');
// Route::resource('user', UserController::class);
// Route::get('/', [UserController::class, 'index'])->name('index');
// Route::resource('student', StudentController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('activate',[ActivationController::class, 'activate'])->name('activate');


Route::get('activate', [ActivationController::class, 'activate'])->name('activate');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::resource('user', UserController::class);
    Route::resource('event', AdminEventController::class);
});

Route::group([
    'middleware' => 'creator',
    'prefix' => 'creator',
    'as' => 'creator.'
], function () {
    Route::resource('event', EventController::class);
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    Route::resource('user', UUserController::class);
});
