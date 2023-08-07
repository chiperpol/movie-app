<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGenreController;
use App\Http\Controllers\MasterNegaraController;
use App\Http\Controllers\MasterQualityController;

Route::redirect('/', '/dashboard');

Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/add', [MoviesController::class, 'add'])->name('movies.add');
Route::post('/movies/add', [MoviesController::class, 'store'])->name('movies.store');
Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::controller(MasterNegaraController::class)->prefix('master')->group(function () {
    Route::get('/negara', 'index')->name('negara.index');
    Route::get('/negara/add', 'add')->name('negara.add');
    Route::post('/negara/add', 'store')->name('negara.store');
    Route::get('/negara/{id}/edit', 'edit')->name('negara.edit');
    Route::put('/negara/edit/{id}', 'update')->name('negara.update');
    Route::delete('/negara/{id}', 'destroy')->name('negara.destroy');
});


Route::controller(MasterGenreController::class)->prefix('master')->group(function () {
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
    );
});
