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

#---------------------------------------------------------------#


Route::get('/', function () {
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
