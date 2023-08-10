<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware(['auth', 'user-role:admin'])->group(function () {
    
    Route::get('/', function () {
        return redirect()->intended('/dashboard_admin');
    });

});