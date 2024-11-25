<?php

use App\Http\Controllers\admin\CredorController;
use App\Http\Controllers\admin\FinanceiroController;
use App\Http\Controllers\admin\SuportController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.index');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // financeiro
    Route::get('/financeiro', [FinanceiroController::class, 'index'])->name('financeiro.index');
    // credores
    Route::get('/creadores', [CredorController::class, 'index'])->name('credor.index');
    // users
    Route::get('/user', [AdminUserController::class, 'index'])->name('user.index');
    // suporte
    Route::get('/suporte', [SuportController::class, 'index'])->name('suporte.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
