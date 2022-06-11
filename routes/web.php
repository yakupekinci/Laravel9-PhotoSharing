<?php

use App\Http\Controllers\AdminPanel\AdminPhotoController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AdminPanel\HomeController as  AdminHomeController;
 use App\Http\Controllers\AdminPanel\CategoryController as  AdminCategoryController;
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

//****************************** HOME PAGE ROUTES ************************************//
 Route::get('/',[HomeController::class,'index'])->name('index');
 Route::get('/about',[HomeController::class,'about'])->name('about');
 Route::get('/references', [HomeController::class,'references'])->name('references');
 Route::get('/contact', [HomeController::class,'contact'])->name('contact');
 Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
 Route::get('/faq', [HomeController::class,'faq'])->name('faq');
 Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');



 Route::get('/photo/{id}',[HomeController::class,'photo'])->name('photo');
 Route::get('/categoryphotos/{id}/{slug}',[HomeController::class,'categoryphotos'])->name('categoryphotos');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//****************************** ADMİN PANEL ROUTES ************************************//
Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    //****************************** General Routes ROUTES ************************************//
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting/', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');





    //****************************** ADMİN CATEGORY ROUTES ************************************//
    Route::prefix('/category')->name('category.')->controller( AdminCategoryController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');
});
    //****************************** ADMİN PHOTO ROUTES ************************************//
    Route::prefix('/photo')->name('photo.')->controller(AdminPhotoController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //****************************** ADMİN PHOTO IMAGE GALLERY ROUTES ************************************//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function (){
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });

    //****************************** ADMİN MESSAGE ROUTES ************************************//
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });
    //****************************** ADMIN FAQ ROUTES ************************************//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //****************************** ADMİN COMMENTS ROUTES ************************************//
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });


});
