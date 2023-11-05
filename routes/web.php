<?php

use App\Http\Controllers\Ajax\UbigeoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostulanteController;
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

Route::get('/', [WebController::class,"index"])->name("home");
Route::get('/login',function(){
    return view('auth.login');
})->name("login");
Route::get('/register',[AuthController::class,'redirectToRegister'])->name("register");
Route::post('/register',[AuthController::class,'register'])->name("registerPost");

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', [AuthController::class,"redirectToGoogle"])->name('redirectToGoogle');
Route::get('/auth/google/callback', [AuthController::class,"handleGoogleCallback"]);

Route::get('/auth/microsfot', [AuthController::class,"redirectToMicrosoft"])->name('redirectToMicrosoft');
Route::get('/auth/microsfot/callback', [AuthController::class,"handleMicrosfotCallback"]);

Route::get('/posts', [WebController::class,"index"])->name("public.posts");
Route::get('/post/{id}', [PostulanteController::class,'post_detalle'])->name('postDetalle');
Route::middleware(['auth'])->group(function () {
    // para rutas que requieran authenticacion
    Route::get('/postular/{id_post}', [PostulanteController::class,'formularioPostular'])->name("frmPostular");
});

Route::get('/ajax/departaments/all', [UbigeoController::class,'get_departamentos'])->name("getDepartamentos");
Route::get('/ajax/provinces/{id_dep}',[UbigeoController::class,'get_prov_by_dep'])->name('getProvByIdDep');
Route::get('/ajax/districts/{id_prov}',[UbigeoController::class,'get_dist_by_prov'])->name('getDistByProv');