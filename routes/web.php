<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', [AdminController::class, 'index'])->name('blog');

Route::get('create', [AdminController::class, 'create']);
Route::post('insert', [AdminController::class, 'insert']);

Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('change/{id}', [AdminController::class, 'change'])->name('change');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');