<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterNegaraController;
use App\Http\Controllers\MoviesController;

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
    return redirect('/movie-app/dashboard');
});

Route::get('/movie-app/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/movie-app/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie-app/negara', [MasterNegaraController::class, 'index'])->name('negara.index');
Route::get('/movie-app/negara/add', [MasterNegaraController::class, 'add'])->name('negara.add');
Route::post('/movie-app/negara/add', [MasterNegaraController::class, 'store'])->name('negara.store');
Route::get('/movie-app/negara/{id}/edit', [MasterNegaraController::class, 'edit'])->name('negara.edit');
Route::put('/movie-app/negara/edit/{id}', [MasterNegaraController::class, 'update'])->name('negara.update');
