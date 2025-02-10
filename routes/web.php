<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MainControlls;
use Illuminate\Support\Facades\Route;

Route::get('/home',[MainControlls::class,'home']);

Route::get('/tirList', [MainControlls::class,'tirList']);

Route::get('/filter', [BookController::class,'filter'])->name('filter');

Route::get('/filterResult', [BookController::class,'filterResult'])->name('filterResult');

Route::get('/random', [BookController::class,'random']);

Route::get('/random2', [MainControlls::class,'random2']);

Route::get('/search', [BookController::class,'search'])->name('books.search');

Route::get('/unreadBooks', [BookController::class, 'unreadBooks'])->name('unreadBooks');

Route::get('/formUnreadBooks', [BookController::class, 'showForm'])->name('showForm');

Route::post('/formUnreadBooks', [BookController::class, 'formUnreadBooks'])->name('formUnreadBooks');

Route::post('/markBook/{id}', [BookController::class, 'markBook'])->name('markBook');
