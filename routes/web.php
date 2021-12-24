<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('aboutus');
Route::get('/contact', [App\Http\Controllers\HomeController::class,'contact'])->name('contactus');
Route::get('/refernce', [App\Http\Controllers\HomeController::class, 'refernces'])->name('refernces');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/place/{id}/{slug}', [App\Http\Controllers\HomeController::class,'product'])->name('product');
Route::get('/categoryplaces/{id}', [App\Http\Controllers\HomeController::class,'categoryplaces'])->name('categoryplaces');


Route::get('FaQ', [App\Http\Controllers\HomeController::class, 'faq'])->name('FaQ');

Route::get('/admin/', [App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login/', [App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck/', [App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout/', [App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

#--------------------------------Admin-Category-----------------#

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/category/', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/category/add/', [App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('/category/create/', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});

#--------------------------------Admin-Product-----------------#

Route::prefix('product')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_product');
    Route::get('/create', [App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_create');
    Route::post('/store/', [App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_store');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
    Route::get('/show', [App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');
});



#*********************************User-Product**********************************#

Route::prefix('userproduct')->group(function (){
    Route::get('/', [App\Http\Controllers\ProductController::class,'index'])->name('user_product');
    Route::get('/create', [App\Http\Controllers\ProductController::class,'create'])->name('user_product_create');
    Route::post('/store/', [App\Http\Controllers\ProductController::class,'store'])->name('user_product_store');
    Route::post('/update/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('user_product_update');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('user_product_edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('user_product_delete');
    Route::get('/show', [App\Http\Controllers\ProductController::class,'show'])->name('user_product_show');
});




#----------------------------------------------------Faq-------------------------------------------------#

Route::prefix('faq')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
    Route::get('/create', [App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_create');
    Route::post('/store/', [App\Http\Controllers\Admin\FaqController::class,'store'])->name('admin_faq_store');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
    Route::get('/show', [App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
});




#-----------------------------Admin-Settings----------------------------------#
Route::middleware('auth')->prefix('/admin')->group(function (){
Route::post('setting/update/', [App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
});


Route::middleware('auth')->prefix('account')->namespace(',myuser')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myaccount');
});

Route::middleware('auth')->prefix('user')->namespace(',user')->group(function (){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');
});

#--------------------------------------------Image-Galery-----------------------------------------------------#
Route::prefix('admin/image')->group(function (){
    Route::get('/create/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
    Route::post('/store/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
    Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
    Route::get('/show', [App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
});

#------------Message----------->
Route::prefix('messages')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
    Route::get('/show', [App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
});
