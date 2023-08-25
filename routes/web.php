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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    
    Route::get('sitemap.xml', [App\Http\Controllers\PageController::class, 'sitemap'])->name('route.sitemap');
    Route::post(LaravelLocalization::transRoute('routes.store'), [App\Http\Controllers\PageController::class, 'store'])->name('route.contact');

    Route::get(LaravelLocalization::transRoute('routes.home'), [App\Http\Controllers\HomeController::class, 'index'])->name('route.home');
    Route::get(LaravelLocalization::transRoute('routes.page'), [App\Http\Controllers\PageController::class, 'index'])->name('route.page');
    Route::get(LaravelLocalization::transRoute('routes.product'), [App\Http\Controllers\PageController::class, 'product'])->name('route.product');
    Route::get(LaravelLocalization::transRoute('routes.policy'), [App\Http\Controllers\PageController::class, 'policy'])->name('route.policy');

});