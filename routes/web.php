<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/houses', [PageController::class, 'houses'])->name('houses');

/* Esempio per differenza tra seeder e operazioni fatte nel controller */
Route::get('/houses/create', function () {
    return view('create-house');
});
Route::post('/houses', function () {
    // do all operations to create a new model

    return view('create-house');
});

Route::get('/posts', [PageController::class, 'posts'])->name('posts');
