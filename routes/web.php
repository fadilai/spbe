<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::middleware('subdomain')->group(function () {
    if (env('APP_ENV') == 'production') {
        $domain = 'tulangbawangkab.go.id';
    } else {
        $domain = 'localhost';
    }
    Route::domain('{subdomain}.' . $domain)->group(function () {
        Route::get('/', Web\SpbeHomeController::class)->name('spbe');
        Route::get('/domain', [Web\SpbeHomeController::class, 'domain'])->name('domain');
    });
});
