<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Livewire\Admin\Index as AdminIndex;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — ธีรพงษ์การช่าง
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/service/{slug?}', [ServiceController::class, 'show'])->name('services.show');
});

Route::get('/about', fn() => view('home.about'))->name('about');
Route::get('/contact', fn() => view('home.contact'))->name('contact');

Route::get('/blog', fn() => view('blog.index'))->name('blog.index');

Route::get('/portal', fn() => view('portal.index'))->name('portal.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('index');
    Route::get('/service/form', [AdminServiceController::class,'create'])->name('service.form');
});
