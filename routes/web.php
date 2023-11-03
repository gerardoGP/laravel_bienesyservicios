<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLogin;
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
Route::get('/register',[GoogleLogin::class,'redirectToRegister'])->name("register");

Route::post('/logout',[GoogleLogin::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleLogin::class,"redirectToGoogle"])->name('redirectToGoogle');
Route::get('/auth/google/callback', [GoogleLogin::class,"handleGoogleCallback"]);

Route::get('/auth/microsfot', [GoogleLogin::class,"redirectToMicrosoft"])->name('redirectToMicrosoft');
Route::get('/auth/microsfot/callback', [GoogleLogin::class,"handleMicrosfotCallback"]);

Route::get('/posts', [WebController::class,"index"])->name("public.posts");
Route::get('/post/{id}', [PostulanteController::class,'post_detalle'])->name('postDetalle');
Route::middleware(['auth'])->group(function () {
    // para rutas que requieran authenticacion
    Route::get('/postular/{id_post}', [PostulanteController::class,'formularioPostular'])->name("frmPostular");
});