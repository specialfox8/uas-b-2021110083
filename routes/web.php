<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemsController;

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Auth;
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
//     return view('index');
// });

Route::get('/', AppController::class)->name('index');


Route::resource('items', ItemsController::class);
Route::get('/items/{id}', [ItemsController::class, 'show']);
Route::put('/items/edit', [ItemsController::class, 'update'])->name('items.update');


Route::get('/order-add', [OrdersController::class, 'index'])->name('order-add.index');
Route::post('/order-add', [OrdersController::class, 'store'])->name('order-add.store');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-us.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/some-route', 'SomeController@someMethod')->middleware('admin');
