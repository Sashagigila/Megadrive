<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', [TestController::class, 'about'])->name('about');

Route::get('/contacts', [TestController::class, 'contacts'])->name('contacts');

Route::get('/products', [ProductController::class,'index'])->name('products.index');

Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');