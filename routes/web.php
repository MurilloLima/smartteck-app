<?php

use App\Http\Controllers\admin\ConsultoresController;
use App\Http\Controllers\admin\CredoresController;
use App\Http\Controllers\admin\DevedoresController;
use App\Http\Controllers\admin\FinanceiroController;
use App\Http\Controllers\admin\SuportController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.index');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // smtp
    Route::get('/smtp', [SmtpController::class, 'index'])->name('smtp.index');
    //consultores
    Route::get('/consultor', [ConsultoresController::class, 'index'])->name('consultores.index');
    //devedores
    Route::get('/devedores', [DevedoresController::class, 'create'])->name('devedores.index');
    // financeiro
    Route::get('/financeiro', [FinanceiroController::class, 'index'])->name('financeiro.index');
    // credores
    Route::get('/creadores', [CredoresController::class, 'index'])->name('credor.index');
    // users
    Route::get('/user', [AdminUserController::class, 'index'])->name('user.index');
    // suporte
    Route::get('/suporte', [SuportController::class, 'index'])->name('suporte.index');
    // devedores
    Route::get('/devedores', [DevedoresController::class, 'index'])->name('devedores.index');
    Route::get('/devedores/create', [DevedoresController::class, 'create'])->name('devedores.create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
