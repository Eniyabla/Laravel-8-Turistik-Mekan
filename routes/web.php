<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('aboutus');
Route::get('/contact', [App\Http\Controllers\HomeController::class,'login'])->name('contactus');
Route::get('/product', [App\Http\Controllers\HomeController::class,'product'])->name('product');


Route::get('/admin/', [App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login/', [App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck/', [App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout/', [App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

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

#-----------------------------Admin-Settings----------------------------------#
Route::middleware('auth')->prefix('/admin')->group(function (){
Route::post('setting/update/', [App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
}); 


Route::get('/login', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
