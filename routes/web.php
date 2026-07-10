<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// Halaman utama - menampilkan berita
Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Halaman detail berita
Route::get('/berita/{id}', [PostController::class, 'show'])->name('posts.show');


Route::get('/posts', [PostController::class, 'index']);

// Halaman register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Halaman yang butuh login (protected)
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});