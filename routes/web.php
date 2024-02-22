<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\typeController;

Route::get('/', [typeController::class, 'index'])->name('pages.index');
