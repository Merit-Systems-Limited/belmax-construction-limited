<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\QuotationsController;

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

Route::get('/', [WebController::class, 'homepage'])->name('homepage');
Route::get('about-us', [WebController::class, 'about'])->name('about');
Route::get('contact-us', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact-us', [ContactsController::class, 'store'])->name('contact.store');

Route::get('quotations', [QuotationsController::class, 'create'])->name('quotations.create');
Route::post('quotations', [QuotationsController::class, 'store'])->name('quotations.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');