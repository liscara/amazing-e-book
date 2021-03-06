<?php

use App\Http\Controllers\AccountMaintanceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', [HomepageController::class, 'index']);
Route::get('/', [HomepageController::class, 'redirect'])->name('home');

Route::get('/language/{locale}', function($locale){
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/ebook/{ebook_id}', [EbookController::class, 'show'])->middleware('auth');
Route::post('/add-to-cart/{ebook_id}', [EbookController::class, 'add_to_cart'])->middleware('auth');

Route::get('/cart', [CartController::class, 'show'])->middleware('auth');
Route::post('/delete-book', [CartController::class, 'delete']);
Route::post('/rent-all', [CartController::class, 'deleteAll']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/update-profile', [ProfileController::class, 'update']);

// Admin

Route::get('/account-maintance', [AccountMaintanceController::class, 'index'])->middleware('admin');
Route::get('/update-role/{id}', [AccountMaintanceController::class, 'update_role'])->middleware('admin');
Route::post('/remove-user', [AccountMaintanceController::class, 'delete_user']);
Route::post('/update-role-user', [AccountMaintanceController::class, 'update_role_user']);
