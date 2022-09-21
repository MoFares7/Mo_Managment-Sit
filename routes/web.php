<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/about', [StaticController::class, 'about'])->name('home.about');
Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');

Route::resource('/computers', ComputersController::class);




Route::get('/strore/{category?}/{items?}', function ($category = null, $items = null) {
    if (isset($category)) {
        if (isset($items)) {
            return "<h1>{$items}</h1>";
        } else {
            return "<h1>{$category}</h1>";
        }
    }
    return "<h1>{STORE}</h1>";
});
