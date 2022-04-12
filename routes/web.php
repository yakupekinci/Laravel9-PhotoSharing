 <?php

 use App\Http\Controllers\HomeController;
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as  AdminHomeController;
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

 Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');


 //****************************** ADMİN CATEGORY ROUTES ************************************//

 Route::get('/admin/category',[\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
 Route::get('/admin/category/create',[\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');
 Route::post('/admin/category/store',[\App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name('admin_category_store');

