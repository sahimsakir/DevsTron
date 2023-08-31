<?php

use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('site.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('site.home.index');
Route::get('/about', [AboutController::class, 'index'])->name('site.about.index');
