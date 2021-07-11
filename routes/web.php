<?php

use App\Http\Controllers;
use App\Http\Controllers\ForumController;
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
    return view('home.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/wargaming', [UserController::class, 'login'])->name('wargaming');
Route::get('/openid/auth', [UserController::class, 'openid'])->name('openid');


if(settings()->get('live')) {
    Route::get('/apply', function () {
        return view('welcome');
    })->name('apply');
} else {
    Route::get('/apply', function () {
        return redirect('https://navygamingamerica.enjin.com/login/do/register', 302);
    })->name('apply');
}

Route::get('/about-us', function() {
    return view('about.us');
})->name('about-us');

Route::get('/about-leadership', function() {
    return view('about.leadership');
})->name('about-leadership');


Route::prefix('forum')->group(function () {
    // Route::get('/', [ForumController::class, 'index'])->name('forum');
    return redirect('https://navygamingamerica.enjin.com/forum', 302);
});

Route::prefix('admin')->group(function () {
    Route::get('/', [Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [Controllers\Admin\AdminUsersController::class, 'index'])->name('admin.users');
    });
    Route::prefix('forum')->group(function () {
        Route::prefix('category')->group(function () {
            
            // Route::post('/', [Controllers\Admin\AdminCategoryController::class, 'store'])->name('admin.category.add');
            // Route::put('/update/{id}', [Controllers\Admin\AdminCategoryController::class, 'update'])->name('admin.category.edit');
            // Route::post('/parent/{id}', [Controllers\Admin\AdminCategoryController::class, 'addParent'])->name('admin.category.addParent');
            // Route::delete('/delete/{id}', [Controllers\Admin\AdminCategoryController::class, 'destroy'])->name('admin.category.delete');
            Route::get('{modal}/{id}/{action}', [Controllers\Admin\AdminCategoryController::class, 'loadModal']);
            Route::get('/', [Controllers\Admin\AdminCategoryController::class, 'index'])->name('admin.category');
        });
    });
});