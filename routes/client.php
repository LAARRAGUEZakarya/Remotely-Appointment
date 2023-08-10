<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('client')->middleware(['auth', 'user-role:client'])->group(function () {
    
    Route::get('/', function () {
        return redirect()->intended('/dashboard_client');
    });

});
