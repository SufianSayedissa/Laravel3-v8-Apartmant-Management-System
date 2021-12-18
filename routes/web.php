<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

// Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
//MENU
    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class,'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class,'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class,'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class,'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class,'show'])->name('admin_menu_show');

    Route::prefix('news')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\NewsController::class,'index'])->name('admin_news');
        Route::get('create',[\App\Http\Controllers\Admin\NewsController::class,'create'])->name('admin_news_add');
        Route::post('store',[\App\Http\Controllers\Admin\NewsController::class,'store'])->name('admin_news_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\NewsController::class,'edit'])->name('admin_news_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\NewsController::class,'update'])->name('admin_news_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\NewsController::class,'destroy'])->name('admin_news_delete');
        Route::get('show',[\App\Http\Controllers\Admin\NewsController::class,'show'])->name('admin_news_show');
    });
});

//NEWS


Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');

Route::get('/',[HomeController::class,'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
