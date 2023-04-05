<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'Index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_catagory',[AdminController::class,'view_catagory']);
Route::post('/add_catagory',[AdminController::class,'add_catagory']);
Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);
Route::get('/view_Product', [AdminController::class, 'view_Product']);
Route::post('/Add_Product', [AdminController::class, 'Add_Product']);
Route::get('/show_Product', [AdminController::class, 'show_Product']);
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
Route::put('/update_product/{id}', [AdminController::class, 'update_product']);
Route::get('/Product_details/{id}', [HomeController::class, 'Product_details']);
Route::post('/Add_cart/{id}', [HomeController::class,'Add_cart']);
Route::get('/show_cart', [HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}', [HomeController::class,'remove_cart']);
Route::get('/buy_now', [HomeController::class,'buy_now']);
Route::put('/update_info', [HomeController::class, 'update_info']);
Route::get('/buy_option', [HomeController::class,'buy_option']);
Route::get('/cash_order', [HomeController::class,'cash_order']);
Route::get('/stripe', [HomeController::class,'stripe']);
Route::post('stripe',[HomeController::class,'stripePost'])->name('stripe.post');
Route::get('/view_order', [AdminController::class, 'view_order']);




