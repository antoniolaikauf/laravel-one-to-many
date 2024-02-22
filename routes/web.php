<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\typeController;
use App\Http\Controllers\projectController;

Route::get('/', [typeController::class, 'index'])->name('pages.index');
Route::get('/project', [projectController::class, 'index'])->name('pages.index');
