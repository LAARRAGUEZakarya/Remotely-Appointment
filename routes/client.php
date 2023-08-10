<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


Route::prefix('client')->middleware(['auth', 'user-role:client'])->group(function () {

    Route::get('/dashboard', [ClientController::class, 'index'])->name('dashboard-patient');

});
