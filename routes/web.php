<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ItemsController;

use App\Http\Controllers\OrdersController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/', AppController::class)->name('index');

Route::resource('items', ItemsController::class);
Route::get('/items/{id}', [ItemsController::class, 'show']);
Route::put('/items/edit', [ItemsController::class, 'update'])->name('items.update');
Route::get('/', AppController::class)->name('home');


Route::get('/contact-us', [OrdersController::class, 'index'])->name('order-add.index');
Route::post('/contact-us', [OrdersController::class, 'store'])->name('order-add.store');
