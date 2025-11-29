<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

Route::get('/products/edit/{id}',[ProductController::class, 'edit'])->name('products.edit');

Route::patch('/products/update/{id}',[ProductController::class, 'update'])->name('products.update');

Route::delete('/products/delete/{id}',[ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');


// lele.com/sdd------------ 404
// lele.com/products/svdvv----------

// put / patch