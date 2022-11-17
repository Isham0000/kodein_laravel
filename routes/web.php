<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Sven\ArtisanView\Blocks\Block;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/all', function () {
//     return view('user'); // resources/views/user.blade.php
// })->name('frontend_user');

Route::get('/user/all', [UserController::class, 'manage'])->name('frontend_user');

// Route::get('/product/{id?}/', function ($id = null) {
//     return view('product', compact('id'));
// });

Route::get('/product/{id?}/', function ($id = null) {
    return view('product', ['id' => $id]);
})->name('frontend_product');

Route::get('/blog/all', [BlogController::class, 'index'])->name('frontend_blog');

Route::get('/blog/show/{key?}', [BlogController::class, 'show'])->name('frontend_blog_show');