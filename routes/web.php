<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\UserController;
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
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('panel.index');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/post/{id}',function($id){
    return view('post');
})->name('post.show');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /*Route::get('/profile',fn()=>'profile')->name('profile')*/

});

Route::middleware(['auth','admin'])->resource('/panel/users',UserController::class)->except(['show']);

require __DIR__.'/auth.php';
