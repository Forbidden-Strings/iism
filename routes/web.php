<?php

use App\Http\Controllers\Pages\Home\IndexController as HomeIndexController;
use App\Http\Controllers\Pages\Home\StoreController as HomeStoreController;
use App\Http\Controllers\Pages\About\IndexController as AboutIndexController;
use App\Http\Controllers\Pages\Blogs\IndexController as BlogsIndexController;
use App\Http\Controllers\Pages\Course\IndexController as CourseIndexController;
use App\Http\Controllers\Pages\Contact\IndexController as ContactIndexController;
use App\Http\Controllers\Pages\Contact\StoreController as ContactStoreController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::group([], function () {
    Route::prefix('/')->group(function () {
        Route::get('/', [HomeIndexController::class, 'index'])->name('page.home');
        Route::post('/store', [HomeStoreController::class, 'store'])->name('page.home.store');
    });

    Route::prefix('/page')->group(function () {
        Route::prefix('/course')->group(function () {
            Route::get('/', [CourseIndexController::class, 'index'])->name('page.course');
        });

        Route::prefix('/about')->group(function () {
            Route::get('/', [AboutIndexController::class, 'index'])->name('page.about');
        });

        Route::prefix('/blog')->group(function () {
            Route::get('/', [BlogsIndexController::class, 'index'])->name('page.blogs');
            Route::get('/{slug}', [BlogsIndexController::class, 'show'])->name('page.blogs.article');
        });

        Route::prefix('contact')->group(function () {
            Route::get('/', [ContactIndexController::class, 'index'])->name('page.contact');
            Route::post('/store', [ContactStoreController::class, 'store'])->name('page.contact.store');
        });
    });
});
