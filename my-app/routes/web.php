<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IntroduceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebMainController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Users\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebMainController::class, 'home']);

Route::get('/duan/{slug}/{id}', [WebMainController::class, 'sanpham']);
Route::get('/detail/{id}-{slug}.html', [WebMainController::class, 'detail']);

Route::get('admin/users/login', [LoginController::class, 'index']);
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::get('/quytrinhthietke/{slug}', [WebMainController::class, 'gioithieu']);

Route::get('lien-he', [MessageController::class, 'weblienhe'])->name('lien-he');
Route::post('lien-he', [MessageController::class, 'guitinnhan']);
Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

       // Introduce
        Route::prefix('introduces')->group(function () {
            Route::get('add', [IntroduceController::class, 'create']);
            Route::post('add', [IntroduceController::class, 'store']);
            Route::get('list', [IntroduceController::class, 'index']);
            Route::get('edit/{introduce}', [IntroduceController::class, 'show']);
            Route::post('edit/{introduce}', [IntroduceController::class, 'update']);
            Route::DELETE('destroy', [IntroduceController::class, 'destroy']);
        });

      
        // //category
        Route::prefix('categorys')->group(function () {
            Route::get('add', [CategoryController::class, 'create']);
            Route::post('add', [CategoryController::class, 'store']); // 'add' là đường dẫn file chứa funtion
            Route::get('list', [CategoryController::class, 'index']);
            Route::get('edit/{id}', [CategoryController::class, 'show']);
            Route::post('edit/{id}', [CategoryController::class, 'update']);
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
        });

        #Product
        Route::prefix('projects')->group(function () {
            Route::get('add', [ProjectController::class, 'create']);
            Route::post('add', [ProjectController::class, 'store']);
            Route::get('list', [ProjectController::class, 'index']);
            Route::get('edit/{project}', [ProjectController::class, 'show']);
            Route::post('edit/{project}', [ProjectController::class, 'update']);
            Route::DELETE('destroy', [ProjectController::class, 'destroy']);
        });

        // #Policy
        // Route::prefix('policys')->group(function () {
        //     Route::get('add', [PolicyController::class, 'create']);
        //     Route::post('add', [PolicyController::class, 'store']);
        //     Route::get('list', [PolicyController::class, 'index']);
        //     Route::get('edit/{policy}', [PolicyController::class, 'show']);
        //     Route::post('edit/{policy}', [PolicyController::class, 'update']);
        //     Route::DELETE('destroy', [PolicyController::class, 'destroy']);
        // });

        // #Banner
        // Route::prefix('banners')->group(function () {
        //     Route::get('add', [BannerController::class, 'create']);
        //     Route::post('add', [BannerController::class, 'store']);
        //     Route::get('list', [BannerController::class, 'index']);
        //     Route::get('edit/{policy}', [BannerController::class, 'show']);
        //     Route::post('edit/{policy}', [BannerController::class, 'update']);
        //     Route::DELETE('destroy', [BannerController::class, 'destroy']);
        // });

        // #News
        // Route::prefix('news')->group(function () {
        //     Route::get('add', [NewController::class, 'create']);
        //     Route::post('add', [NewController::class, 'store']);
        //     Route::get('list', [NewController::class, 'index']);
        //     Route::get('edit/{news}', [NewController::class, 'show']);
        //     Route::post('edit/{news}', [NewController::class, 'update']);
        //     Route::DELETE('destroy', [NewController::class, 'destroy']);
        // });
        // #message
        Route::prefix('messages')->group(function () {
            Route::get('list', [MessageController::class, 'index']);
            Route::get('view/{message}', [MessageController::class, 'show']);
            Route::DELETE('destroy', [MessageController::class, 'destroy']);
        });

        Route::prefix('user')->group(function () {
            Route::get('list', [UserController::class, 'index']);
            Route::post('list', [UserController::class, 'store']);
            Route::post('reset-password', [UserController::class, 'resetPassword']);
            Route::DELETE('destroy', [UserController::class, 'destroy']);

            Route::get('show', [UserController::class, 'show']);
            Route::post('show', [UserController::class, 'edit']);
        });

        // #cart
        // Route::get('cart', [CartController::class, 'index']);
        // Route::post('cart/edit/{customer}', [CartController::class, 'update']);
        // Route::DELETE('cart/destroy', [CartController::class, 'destroy']);
        // Route::get('cart/view/{customer}', [CartController::class, 'view']);
    });
});

