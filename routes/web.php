<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/technology', function () {
    return view('pages.technology');
});
Route::get('/products', function () {
    return view('pages.product.index');
});

Route::get('/products/show', function () {
    return view('pages.product.show');
});
Route::get('/fetaures', function () {
    return view('pages.features.index');
});

Route::get('/about', function () {
    return view('pages.about.index');
});
Route::get('/team-members', function () {
    return view('pages.about.team_member');
});
