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

