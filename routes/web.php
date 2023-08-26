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

Route::group(['prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale()], function () {

    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return 'Application cache has been cleared';
    });
    
    //Clear route cache:
    Route::get('/route-cache', function() {
        Artisan::call('route:cache');
        return 'Routes cache has been cleared';
    });
    
    //Clear config cache:
    Route::get('/config-cache', function() {
         Artisan::call('config:cache');
         return 'Config cache has been cleared';
    }); 
    
    // Clear view cache:
    Route::get('/view-clear', function() {
        Artisan::call('view:clear');
        return 'View cache has been cleared';
    });
    
    Route::get('sitemap.xml', [App\Http\Controllers\PageController::class, 'sitemap'])->name('route.sitemap');
    Route::post(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.store'), [App\Http\Controllers\PageController::class, 'store'])->name('route.contact');

    Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.home'), [App\Http\Controllers\HomeController::class, 'index'])->name('route.home');
    Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.page'), [App\Http\Controllers\PageController::class, 'index'])->name('route.page');
    Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.product'), [App\Http\Controllers\PageController::class, 'product'])->name('route.product');
    Route::get(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::transRoute('routes.policy'), [App\Http\Controllers\PageController::class, 'policy'])->name('route.policy');


    
});