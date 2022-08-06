<?php

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


// Authentication routes
Auth::routes();

Route::get('/scrapper', [\App\Http\Controllers\ScrapperController::class, 'scrapper'])->name('scrapper');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Include Wave Routes
Wave::routes();
