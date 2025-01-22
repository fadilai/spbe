<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', Web\SpbeHomeController::class)->name('spbe');
Route::get('/domain', [Web\SpbeHomeController::class, 'domain'])->name('domain');
