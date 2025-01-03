<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MovieController;

Route::get('/movie-list', [MovieController::class, 'index']);
Route::get('/cart-list', [MovieController::class, 'movieCart']);
Route::post('add-to-cart', [MovieController::class, 'addMovieToCart'])->name('add-movie-to-shopping-cart');
Route::delete('/delete-cart-item', [MovieController::class, 'deleteItem'])->name('delete.cart.item');
Route::get('/add-movie', [MovieController::class, 'addMovie'])->name('add-new-movie');
Route::post('/movie-list', [MovieController::class, 'movieStore'])->name('movie-store');
