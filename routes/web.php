<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AddCardController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cards', [RequestController::class, 'index'])->middleware(['auth', 'verified'])->name('cards');
Route::get('/pokemon', [RequestController::class, 'index'])->middleware(['auth', 'verified'])->name('pokemon');

Route::get('/add', [AddCardController::class, 'index'])->middleware(['auth', 'verified'])->name('addcard');

Route::get('/cardinfo/{id}', [InfoController::class, 'index'])->middleware(['auth', 'verified'])->name('cardinfo');

Route::post('/favorite', [FavoriteController::class, 'index'])->middleware(['auth', 'verified'])->name('favorite');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
