<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(PostController::class)->group(function () {
	Route::get('/posts', 'index')->name('posts.index');
	Route::get('/posts/{post}', 'get')->name('posts.get');
	Route::post('/posts', 'store')->name('posts.store');
	Route::put('/posts/{post}', 'update')->name('posts.update');
	Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
});
