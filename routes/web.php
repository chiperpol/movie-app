<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGenreController;
use App\Http\Controllers\MasterNegaraController;
use App\Http\Controllers\MasterQualityController;

Route::redirect('/', '/signin');

Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup')->middleware('guest');
Route::post('/signup', [AuthController::class, 'store'])->name('auth.store');

Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin')->middleware('guest'); //middleware(guest) artinya halaman signin hanya bisa diakses oleh user yang BELUM melakukan authentication, jika sudah signin maka halaman login tidak dapat diakses. Parameter guest merupakan default dari \App\Http\Kernel.php line ke 61 yaitu middleware global
Route::post('/signin', [AuthController::class, 'authenticate'])->name('auth.authenticate');

Route::post('/signout', [AuthController::class, 'signout'])->name('auth.signout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');  //middleware(auth) artinya halaman signin hanya bisa diakses oleh user yang SUDAH melakukan authentication, jika BELUM signin dan mencoba mengases menu melalui url, maka akan mengeksekusi route('auth.signin'). Route tersebut dapat diatur pada app\Http\Middleware\Authenticate.php. Parameter auth merupakan default dari \App\Http\Kernel.php line ke 61 yaitu middleware global

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/add', [MoviesController::class, 'add'])->name('movies.add');
Route::post('/movies/add', [MoviesController::class, 'store'])->name('movies.store')->middleware('auth');
Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/users/add', [UsersController::class, 'add'])->name('users.add')->middleware('auth');
Route::post('/users/add', [UsersController::class, 'store'])->name('users.store');

Route::controller(MasterNegaraController::class)->prefix('master')->middleware('auth')->group(function () {
    Route::get('/negara', 'index')->name('negara.index');
    Route::get('/negara/add', 'add')->name('negara.add');
    Route::post('/negara/add', 'store')->name('negara.store');
    Route::get('/negara/{id}/edit', 'edit')->name('negara.edit');
    Route::put('/negara/edit/{id}', 'update')->name('negara.update');
    Route::delete('/negara/{id}', 'destroy')->name('negara.destroy');
});


Route::controller(MasterGenreController::class)->prefix('master')->middleware('auth')->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/add', 'add')->name('genre.add');
    Route::post('/genre/add', 'store')->name('genre.store');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/edit/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'destroy')->name('genre.destroy');
});

Route::prefix('master')->group(function () {
    Route::resource(
        'quality',
        App\Http\Controllers\MasterQualityController::class
    )->middleware('auth');
});
