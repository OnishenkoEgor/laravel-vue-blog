<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/posts', [PostController::class, 'index'])->name('post.index');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

// Route::get('/users', [UserController::class, 'index'])->name('user.index');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');

// Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');

// Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
// Route::get('/tags/create', [TagController::class, 'create'])->name('tag.create');
// Route::post('/tags', [TagController::class, 'store'])->name('tag.store');
// Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tag.show');


// // admin pages
// Route::group([
//     'namespace' => 'Admin',
//     'prefix' => 'admin',
//     'as' => 'admin.',
//     'middleware' => 'auth'
// ], function () {
//     Route::get('/', [AdminController::class, 'index'])->name('index');
//     Route::group([
//         'prefix' => 'post',
//         'as' => 'post.'
//     ], function () {
//         Route::get('/', [AdminPostController::class, 'index'])->name('index');
//         Route::get('/create', [AdminPostController::class, 'create'])->name('create');
//         Route::post('/store', [AdminPostController::class, 'store'])->name('store');
//         Route::get('/edit/{post}', [AdminPostController::class, 'edit'])->name('edit');
//         Route::patch('/{post}', [AdminPostController::class, 'update'])->name('update');
//         Route::delete('/{post}', [AdminPostController::class, 'destroy'])->name('destroy');
//     });
//     Route::group([
//         'prefix' => 'user',
//         'as' => 'user.'
//     ], function () {
//         Route::get('/', [AdminUserController::class, 'index'])->name('index');
//         Route::get('/create', [AdminUserController::class, 'create'])->name('create');
//         Route::post('/store', [AdminUserController::class, 'store'])->name('store');
//         Route::get('{user}/edit', [AdminUserController::class, 'edit'])->name('edit');
//         Route::patch('/{user}', [AdminUserController::class, 'update'])->name('update');
//         Route::delete('/{user}', [AdminUserController::class, 'destroy'])->name('destroy');
//     });
// });


Route::get('/{any}', function () {
    return view('main');
})->where('any', '.*');

Auth::routes();