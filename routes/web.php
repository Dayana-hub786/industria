<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\EquipamentosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::resource('setores', setorController::class);
route::resource('equipamentos', equipamentosController::class);
route::resource('funcionarios', funcionariosController::class);
Route::patch('/setores/{id}/status',[SetorController::class,'ativarDesativar'])->name('setores.ativar-desativar');
});

require __DIR__.'/auth.php';
