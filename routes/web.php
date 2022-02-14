<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\DesignController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductmetaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubdesignController;
use App\Http\Controllers\Admin\Teamcontroller;
use App\Http\Controllers\Admin\TechnologyController;
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
    Route::resource('services', ServiceController::class);
    Route::resource('technologies', TechnologyController::class);
    Route::resource('productmetas', ProductmetaController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('team', Teamcontroller::class);
    Route::resource('contacts', ContactusController::class);
    Route::resource('designs', DesignController::class);
    Route::resource('sub-designs', SubdesignController::class);
});

Route::get('our-technologies', [PageController::class, 'technology'])->name('our-technologies');
Route::get('products', [PageController::class, 'products'])->name('products');
Route::get('products/{url}', [PageController::class, 'product_show'])->name('pages.products.show');
Route::get('fetaures', [PageController::class, 'fetaures'])->name('fetaures');
Route::get('team-members', [PageController::class, 'teamMembers'])->name('teammembers');
Route::get('contact-us', [PageController::class, 'contactForm'])->name('contactform');
Route::post('contact-store', [PageController::class, 'contactStore'])->name('contact-store');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('our-designs', [PageController::class, 'desgin'])->name('our-design');
Route::get('design/{url}', [PageController::class, 'desgin_show'])->name('pages.design.show');
