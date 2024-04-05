<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\EditorUploadController;
use App\Http\Controllers\Panel\ProfileController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ShowPostController;
use App\Http\Controllers\ShowPostCategoryController;

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

Route::get('/',[LandingController::class,'index'])->name('landing');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'admin'])->prefix('/panel')->group(function() {
    Route::resource('/users', UserController::class)
            ->except(['show']);
    Route::resource('/categories', CategoryController::class)
            ->except(['show', 'create']);      
});

Route::middleware(['auth', 'author'])->prefix('/panel')->group(function() {
    Route::resource('/posts', PostController::class)->except(['show']);
    Route::post('/editor/upload', [EditorUploadController::class, 'upload'])
            ->name('editor-upload');
});
Route::get('/post/{post:slug}',[ShowPostController::class,'show'])
        ->name('post.show');
Route::get('/category/{category:slug}',[ShowPostCategoryController::class,'show'])
        ->name('category.show');
require __DIR__.'/auth.php';
