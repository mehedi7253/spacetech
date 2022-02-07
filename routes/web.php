<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductmetaController;
use App\Http\Controllers\Admin\Teamcontroller;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Page\HomePageController;
use App\Http\Controllers\Page\PageController;
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

Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {
    Route::get('index', [AdminController::class, 'index']);
    Route::resource('products', ProductController::class);
    Route::resource('technologies', TechnologyController::class);
    Route::resource('productmetas', ProductmetaController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('team', Teamcontroller::class);
    Route::resource('contacts', ContactusController::class);
});

Route::get('products', [HomePageController::class, 'products'])->name('pages.products');
Route::get('our-technologies', [PageController::class, 'technology'])->name('our-technologies');



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
Route::get('/contact', function () {
    return view('pages.contact.index');
});
