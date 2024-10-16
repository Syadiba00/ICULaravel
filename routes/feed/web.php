<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

//Day3
Route::get('/feeds', [FeedController::class, 'index'])->name('feeds');

Route::post('/feed/create', [FeedController::class, 'create'])->name('feed.create');

Route::put('/feed/update/{feed}', [FeedController::class, 'update'])->name('feed.update');

//get request {feed}- small letter- kene sama ngan model
Route::get('/feed/show/{feed}', [FeedController::class, 'show'])->name('feed.show');