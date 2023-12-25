<?php
// prefijo admin
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PostulantController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/',[DashboardController::class,'index'])->name('admin.home');
Route::get('/postulants',[PostulantController::class,'index'])->name('admin.postu.home');
