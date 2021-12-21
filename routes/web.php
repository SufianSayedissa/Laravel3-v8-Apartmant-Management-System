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
// Home Panel
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/news',[HomeController::class,'news'])->name('news');
Route::get('/announcements',[HomeController::class,'announcements'])->name('announcements');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/fag',[HomeController::class,'fag'])->name('fag');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');


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
//NEWS
    Route::prefix('news')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\NewsController::class,'index'])->name('admin_news');
        Route::get('create',[\App\Http\Controllers\Admin\NewsController::class,'create'])->name('admin_news_add');
        Route::post('store',[\App\Http\Controllers\Admin\NewsController::class,'store'])->name('admin_news_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\NewsController::class,'edit'])->name('admin_news_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\NewsController::class,'update'])->name('admin_news_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\NewsController::class,'destroy'])->name('admin_news_delete');
        Route::get('show',[\App\Http\Controllers\Admin\NewsController::class,'show'])->name('admin_news_show');
    });

//NEWS IMAGE GALLERY
    Route::prefix('image')->group(function (){
        Route::get('create/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    //SETTING
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});




Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
