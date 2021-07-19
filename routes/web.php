<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
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

// if(settings()->get('live')) {
//     Route::get('/apply', function () {
//         return view('welcome');
//     })->name('apply');
// } else {
//     Route::get('/apply', function () {
//         return redirect('https://navygamingamerica.enjin.com/login/do/register', 302);
//     })->name('apply');
// }
Route::get('/apply', function () {
    return redirect('https://navygamingamerica.enjin.com/login/do/register', 302);
})->name('apply');

Route::get('/about-us', function () {
    return view('about.us');
})->name('about-us');

Route::get('/about-leadership', function () {
    return view('about.leadership');
})->name('about-leadership');

// Route::resource('forum', ForumController::class);
// Route::resource('category', CategoryController::class);
// Route::resource('topic', TopicController::class);

Route::group(['prefix' => 'forum', 'as' => 'forum.'], function () {
    Route::get('/', [ForumController::class, 'index'])->name('index');

    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/{cat}/topic/create', [TopicController::class, 'create'])->name('topic.create');
        Route::post('/{cat}/topic/create', [TopicController::class, 'store'])->name('topic.tore');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [AdminUsersController::class, 'index'])->name('admin.users');
    });
    Route::prefix('forum')->group(function () {
        Route::prefix('category')->group(function () {
            Route::post('/store', [AdminCategoryController::class, 'store'])->name('admin.category.store');
            // Route::post('/', [AdminCategoryController::class, 'store'])->name('admin.category.add');
            // Route::put('/update/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.edit');
            // Route::post('/parent/{id}', [AdminCategoryController::class, 'addParent'])->name('admin.category.addParent');
            // Route::delete('/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.delete');
            Route::get('{modal}/{id}/{action}', [AdminCategoryController::class, 'loadModal']);
            Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.category');
        });
    });
});
