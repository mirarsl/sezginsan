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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('sitemap.xml', [App\Http\Controllers\PageController::class, 'sitemap'])->name('route.sitemap');
Route::post('form/iletisim', [App\Http\Controllers\PageController::class, 'store'])->name('route.contact');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('route.home');
Route::get('{slug}', [App\Http\Controllers\PageController::class, 'index'])->name('route.page');
Route::get('urun/{slug}', [App\Http\Controllers\PageController::class, 'product'])->name('route.product');
Route::get('politika/{slug}', [App\Http\Controllers\PageController::class, 'policy'])->name('route.policy');


