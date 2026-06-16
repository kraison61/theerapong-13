<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — ธีรพงษ์การช่าง
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// รายละเอียดบริการ  →  /services/wall , /services/fence , ...
Route::get('/services/{service?}', fn (string $service = 'wall') =>
    view('services.show', ['service' => $service])
)->name('services.index');

Route::get('/blog', fn () => view('blog.index'))->name('blog.index');

Route::get('/portal', fn () => view('portal.index'))->name('portal.index');
