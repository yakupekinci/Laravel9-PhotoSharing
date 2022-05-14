<?php

use App\Http\Controllers\AdminPanel\AdminPhotoController;
use App\Http\Controllers\AdminPanel\ImageController;
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


 Route::get('/', array(HomeController::class,'index'))->name('index');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//****************************** ADMİN PANEL ROUTES ************************************//
Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
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
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });


});
