<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGenreController;
use App\Http\Controllers\MasterNegaraController;
use App\Http\Controllers\MoviesController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');

Route::controller(MasterNegaraController::class)->prefix('master')->group(function () {
    Route::get('/negara', 'index')->name('negara.index');
    Route::get('/negara/add', 'add')->name('negara.add');
    Route::post('/negara/add', 'store');
    Route::get('/negara/{id}/edit', 'edit')->name('negara.edit');
    Route::put('/negara/edit/{id}', 'update');
});


Route::controller(MasterGenreController::class)->prefix('master')->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
});
