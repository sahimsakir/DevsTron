<?php

use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\TeamController;
use App\Http\Controllers\Site\CareerController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\PortfolioController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;
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
Route::get('/team', [TeamController::class, 'index'])->name('site.team.index');
Route::get('/career', [CareerController::class, 'index'])->name('site.career.index');
Route::get('/career-show', [CareerController::class, 'show'])->name('site.career.show');
Route::get('/career-create', [CareerController::class, 'create'])->name('site.career.create');
Route::get('/service', [ServiceController::class, 'index'])->name('site.service.index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('site.portfolio.index');
Route::get('/portfolio-show', [PortfolioController::class, 'show'])->name('site.portfolio.show');
Route::get('/blog', [BlogController::class, 'index'])->name('site.blog.index');
Route::get('/blog-show', [BlogController::class, 'show'])->name('site.blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact.index');