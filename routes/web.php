<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    // return view('welcome');
    return view('home');
});
Route::get('admin/home',[PostController::class,'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('admin/addpost',[PostController::class,'create'])->middleware(['auth', 'verified'])->name('admin.addpost');
Route::get('admin/showpost/{id}',[PostController::class,'show'])->middleware(['auth', 'verified'])->name('admin.post.show');
Route::get('admin/editpost/{id}',[PostController::class,'edit'])->middleware(['auth', 'verified'])->name('admin.post.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
