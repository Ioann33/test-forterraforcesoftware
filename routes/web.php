<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\Lot;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('register'));
});

Route::get('/dashboard', function () {
    return view('lots.lots');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('/lots', Lot::class);
    Route::resource('/categories', Category::class);
});

require __DIR__.'/auth.php';
