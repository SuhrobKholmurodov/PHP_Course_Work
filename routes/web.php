<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/role-register', [Controllers\Admin\DashboardController::class, 'registered']);
    Route::get('/role-edit/{id}', [Controllers\Admin\DashboardController::class, 'registeredit']);
    Route::put('/role-register-update/{id}', [Controllers\Admin\DashboardController::class, 'registerupdate']);
    Route::delete('/role-delete/{id}', [Controllers\Admin\DashboardController::class, 'registerdelete']);

    
    Route::get('/abouts', [Controllers\Admin\AboutusController::class, 'index']);
    Route::post('/save-aboutus',[Controllers\Admin\AboutusController::class, 'store']);
    Route::get('/about-us/{id}', [Controllers\Admin\AboutusController::class, 'edit']);
    Route::put('/aboutus-update/{id}', [Controllers\Admin\AboutusController::class, 'update']);
    Route::delete('/about-us-delete/{id}', [Controllers\Admin\AboutusController::class, 'delete']);


    Route::get('/service-category',[Controllers\Admin\ServiceController::class, 'index']);
    Route::get('/service-create', [Controllers\Admin\ServiceController::class, 'create']);
    Route::post('/category-store', [Controllers\Admin\ServiceController::class, 'store']);
    Route::get('/service-cate-edit/{id}', [Controllers\Admin\ServiceController::class, 'edit']);
    Route::put('/category-update/{id}', [Controllers\Admin\ServiceController::class, 'update']);
    Route::delete('/service-delete/{id}', [Controllers\Admin\ServiceController::class, 'servicedelete']);


    Route::get('/service-list', [Controllers\Admin\ServicelistController::class, 'index']);
});


require __DIR__.'/auth.php';
