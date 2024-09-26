<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index']);

