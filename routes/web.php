<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('user/message/replyed', [UserController::class, 'replyedmessage'])->name('user_message_replyed');
Route::get('user/message/unread', [UserController::class, 'unreadmessage'])->name('user_message_unread');
Route::get('user/message/new', [UserController::class, 'newmessage'])->name('user_message_new');
Route::get('user/message/read', [UserController::class, 'readmessage'])->name('user_message_read');
Route::get('/delete/{id}', [App\Http\Controllers\UserController::class,'deletemessage'])->name('user_message_delete');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');

#-----------------------------------------User/HomeController---------------------------------------->
Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('aboutus');
Route::get('/contact', [App\Http\Controllers\HomeController::class,'contact'])->name('contactus');
Route::get('/refernce', [App\Http\Controllers\HomeController::class, 'refernces'])->name('refernces');

Route::post('sendmessage', [HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('mymessages', [userController::class, 'allmessages'])->name('all_message');

Route::get('/place/{id}/{slug}', [App\Http\Controllers\HomeController::class,'product'])->name('product');
Route::get('/placedetail/{id}', [App\Http\Controllers\HomeController::class,'product_detail'])->name('placedetail');
Route::post('/getplace', [App\Http\Controllers\HomeController::class,'getplace'])->name('getplace');
Route::get('/placelist/{search}', [App\Http\Controllers\HomeController::class,'placelist'])->name('placelist');
Route::get('/category-places/{id}', [App\Http\Controllers\HomeController::class,'categoryplaces'])->name('categoryplaces');
Route::get('/place-detail/{id}', [App\Http\Controllers\HomeController::class,'product_detail'])->name('product_detail');

Route::get('FaQ', [HomeController::class, 'faq'])->name('FaQ');
#---------------------------------------------------------------------------------------------------->


#----------------------------------------------------User-Reviews------------------------------------->
Route::middleware('auth')->prefix('userreviews')->group(function (){
    Route::get('/', [App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
    Route::post('/update/{id}', [App\Http\Controllers\ReviewController::class,'update'])->name('user_review_update');
    Route::get('/edit/{id}', [App\Http\Controllers\ReviewController::class,'edit'])->name('user_review_edit');
    Route::get('/delete/{id}', [App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
    Route::get('/show', [App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    Route::get('/new', [App\Http\Controllers\ReviewController::class,'newreview'])->name('user_new_review');
    Route::get('/active', [App\Http\Controllers\ReviewController::class,'activereview'])->name('user_active_review');
    Route::get('/inactive', [App\Http\Controllers\ReviewController::class,'inactivereview'])->name('user_inactive_review');

});
#----------------------------------------------------------------------------------------------------


#♥♥♥♥♥♥♥♥whislist♥♥♥♥♥♥♥♥
Route::middleware('auth')->prefix('user')->group(function (){
    Route::get('/wishlist', [App\Http\Controllers\UserController::class,'wishlist'])->name('wishlist');
    Route::get('/likedproducts', [App\Http\Controllers\UserController::class,'likedproducts'])->name('likedproducts');
});

#*********************************User-Product**********************************#

Route::middleware('auth')->prefix('userproduct')->group(function (){
    Route::get('/', [App\Http\Controllers\ProductController::class,'index'])->name('user_product');
    Route::get('/create', [App\Http\Controllers\ProductController::class,'create'])->name('user_product_create');
    Route::post('/store/', [App\Http\Controllers\ProductController::class,'store'])->name('user_product_store');
    Route::post('/update/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('user_product_update');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('user_product_edit');
    Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('user_product_delete');
});
Route::get('/new', [App\Http\Controllers\ProductController::class,'new_product'])->name('user_product_new');
Route::get('/active', [App\Http\Controllers\ProductController::class,'available_product'])->name('user_product_active');

#--------------------------------------------User-Image-Galery-----------------------------------------------------#

Route::middleware('auth')->prefix('user-product-image')->group(function (){
    Route::get('/create/{product_id}', [App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
    Route::post('/store/{product_id}', [App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
    Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete');
    Route::get('/show', [App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');
});

Route::middleware('auth')->prefix('account')->namespace('myuser')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myaccount');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'Userprofile'])->name('useraccount');
});
Route::get('/account/profile', [\App\Http\Controllers\UserController::class, 'user_profile'])->name('user_profile');

#--------------------------------Admin-Login-----------------#

Route::middleware('auth')->group(function (){
    Route::get('/admin/', [App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('admin');
    Route::get('/admin/login/', [App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
    Route::post('/admin/logincheck/', [App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get('/logout/', [App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

#--------------------------------Admin-Category-----------------#

    Route::middleware('admin')->prefix('admin')->group(function (){
        Route::get('/category/', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('/category/add/', [App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::get('/category/create/', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
    });

#--------------------------------Admin-Product-----------------#

    Route::middleware('admin')->prefix('product')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_product');
        Route::get('/create', [App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_create');
        Route::post('/store/', [App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_store');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
        Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
        Route::get('/show', [App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');
    });



    // Route::post('comment',[\App\Http\Controllers\HomeController::class,'postComment'])->name('postComment');
    // Route::get('like',[\App\Http\Controllers\ReviewController::class,'pressLike'])->name('user_pressLike');
#---------------------------------------------------Admin-Faq-------------------------------------------------#

    Route::middleware('admin')->prefix('faq')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
        Route::get('/create', [App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_create');
        Route::post('/store/', [App\Http\Controllers\Admin\FaqController::class,'store'])->name('admin_faq_store');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
        Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('/show', [App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
    });




#-----------------------------Admin-Settings----------------------------------#
    Route::middleware('admin')->prefix('/admin')->group(function (){
        Route::post('setting/update/', [App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
        Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    });
#--------------------------------------------Admin-Image-Galery-----------------------------------------------------#
    Route::middleware('admin')->prefix('admin/image')->group(function (){
        Route::get('/create/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('/store/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('/show', [App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
    #------------Message----------->
    Route::middleware('admin')->prefix('messages')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('/show', [App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
    });

    #------------Reviews----------->
    Route::middleware('admin')->prefix('reviews')->group(function (){
        Route::get('/', [ReviewController::class,'index'])->name('admin_review');
        Route::post('/update/{id}', [ReviewController::class,'update'])->name('admin_review_update');
        Route::get('/edit/{id}', [ReviewController::class,'edit'])->name('admin_review_edit');
        Route::get('/delete/{id}', [ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('/show', [ReviewController::class,'show'])->name('admin_review_show');
    });


    #---------------------------------------Admin_user/role------------------------------------------------------#

    Route::middleware('admin')->prefix('user')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_user');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class,'update'])->name('admin_user_update');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin_user_edit');
        Route::post('/store/{id}', [App\Http\Controllers\Admin\UserController::class,'store'])->name('admin_user_store');
        Route::post('/create', [App\Http\Controllers\Admin\UserController::class,'create'])->name('admin_user_create');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin_user_delete');
        Route::post('/userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class,'userrolestore'])->name('admin_user_role_store');
        Route::get('/userrole/{id}', [App\Http\Controllers\Admin\UserController::class,'userrole'])->name('admin_user_roles');
        Route::get('/userroledelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class,'userroledelete'])->name('admin_user_role_delete');
    });
    #--------------------------------------------------------------------------------------------------#

});





