<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', _SiteController::class)->name('index');






Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [_SiteController::class,'admin'])->name('admin.index');
    Route::resource('/admin/products', ProductController::class)->names('admin.products');
    
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
