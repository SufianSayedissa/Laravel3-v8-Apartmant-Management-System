<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
//use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestsController;
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
    return view('welcome');
});
// Home Panel
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/content',[HomeController::class,'content'])->name('content');
Route::get('/announcements',[HomeController::class,'announcements'])->name('announcements');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/newscontent',[HomeController::class,'newscontent'])->name('newscontent');
Route::get('/announcementscontent',[HomeController::class,'announcementscontent'])->name('announcementscontent');
Route::get('/contentdetail/{id}',[HomeController::class,'contentdetail'])->name('contentdetail');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/contentslider/{id}',[HomeController::class,'contentslider'])->name('contentslider');
Route::post('/getcontent',[HomeController::class,'getcontent'])->name('getcontent');
Route::get('/contentlist/{search}',[HomeController::class,'contentlist'])->name('contentlist');





//Home User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('userprofile');

    Route::prefix('requests')->group(function (){
        Route::get('/',[RequestsController::class,'index'])->name('user_requests');
        Route::get('create',[RequestsController::class,'create'])->name('user_requests_add');
        Route::post('store',[RequestsController::class,'store'])->name('user_requests_store');
        Route::get('edit/{id}',[RequestsController::class,'edit'])->name('user_requests_edit');
        Route::post('update/{id}',[RequestsController::class,'update'])->name('user_requests_update');
        Route::get('delete/{id}',[RequestsController::class,'destroy'])->name('user_requests_delete');
        Route::get('show',[RequestsController::class,'show'])->name('user_requests_show');
    });

    });


// Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    //Admin Role
    Route::middleware('admin')->group(function (){

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
//MENU
    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class,'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class,'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class,'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class,'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class,'show'])->name('admin_menu_show');
//CONTENT
    Route::prefix('content')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ContentController::class,'index'])->name('admin_content');
        Route::get('create',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_add');
        Route::post('store',[\App\Http\Controllers\Admin\ContentController::class,'store'])->name('admin_content_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ContentController::class,'edit'])->name('admin_content_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ContentController::class,'update'])->name('admin_content_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('admin_content_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ContentController::class,'show'])->name('admin_content_show');
    });
//MESSAGE
    Route::prefix('messages')->group(function (){
        Route::get('/',[MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
    });


 //REVIEW
    Route::prefix('review')->group(function(){
        Route::get('/',[ReviewController::class,'index'])->name('admin_review');
        Route::post('update/{id}',[ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[ReviewController::class,'show'])->name('admin_review_show');
    });

    //REQUESTS
    Route::prefix('requests')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\RequestsController::class,'index'])->name('admin_requests');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RequestsController::class,'edit'])->name('admin_requests_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\RequestsController::class,'update'])->name('admin_requests_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RequestsController::class,'destroy'])->name('admin_requests_delete');
        Route::get('show',[\App\Http\Controllers\Admin\RequestsController::class,'show'])->name('admin_requests_show');
    });


//content IMAGE GALLERY
    Route::prefix('image')->group(function (){
        Route::get('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    //SETTING
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


    //FAQ
        Route::prefix('faq')->group(function (){
            Route::get('/',[FaqController::class,'index'])->name('admin_faq');
            Route::get('create',[FaqController::class,'create'])->name('admin_faq_add');
            Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
            Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
            Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
            Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
            Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');
         });
    });//Admin
});//Auth

//User Reviews
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[UserController::class,'destroymyreview'])->name('user_review_delete');

});





Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
