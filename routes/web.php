<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});




Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
            if (Auth::user()->role == 'client') {
                return redirect()->intended('client/dashboard');

            } else if (Auth::user()->role == 'admin') {
                return redirect()->intended('admin/dashboard');
            }
    });

});

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/admin.php';
require __DIR__.'/client.php';

