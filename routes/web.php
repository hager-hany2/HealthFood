<?php

use App\Http\Controllers\web\Auth\LoginControllerResource;
use App\Http\Controllers\web\Auth\RegisterControllerResource;
use App\Http\Controllers\web\ContactControllerResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\Admin\AddAdminControllerResource;
use App\Http\Controllers\web\Admin\AddProductControllerResource;
use App\Http\Controllers\web\Auth\LogoutController;
use App\Http\Controllers\ServicesAboutController;
use App\Http\Controllers\DeleteItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\Admin\ServicesControllerResource;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientShopController;
use App\Http\Controllers\ServicesAdminController;
use App\Http\Controllers\DashboardController;


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

Route::get('/welcome', function () {
    return view('welcome');
});
// dashboard Admin
Route::group(['prefix' => 'Admin', 'middleware' => ['admin']], function () {
    //add admin
    Route::get('/AddAdmin', [AddAdminControllerResource::class, 'index'])->name('Admin');
    Route::any('/save', [AddAdminControllerResource::class, 'save'])->name('Admin.save');
    //show user
    Route::get('/showUsers', [UsersController::class, 'users']);
    //show product
    Route::get('/showProducts', [ProductController::class, 'product']);
    //show contact
    Route::get('/showContactus', [ContactController::class, 'contact']);
    //show services in dashboard
    Route::get('/service', [ServicesAdminController::class, 'service']);
    //show profile dashboard
    Route::get('/profile', [DashboardController::class, 'index'])
        ->middleware('auth.client')
        ->name('dashboard.show');
    Route::prefix('/AddProduct')->group(function () {
        Route::get('/', [AddProductControllerResource::class, 'index'])->name('AddProduct');
        Route::any('/save', [AddProductControllerResource::class, 'store'])->name('AddProduct.save');
    });
    Route::prefix('/AddServices')->group(function () {
        Route::get('/', [ServicesControllerResource::class, 'index'])->name('AddServices');
        Route::any('/save', [ServicesControllerResource::class, 'store'])->name('AddServices.save');
    });
});
//show shop
Route::get('/Admin/shop', [ClientShopController::class, 'shop'])->name('Show.Shop');
//show services in about
Route::get('/showServices', [ServicesAboutController::class, 'Services']);
//contact show & save
Route::prefix('/contact')->group(function () {
    Route::get('/', [ContactControllerResource::class, 'index']);
    Route::post('/save', [ContactControllerResource::class, 'save'])->name('contact.save');
});
// SigIn &SigUp
Route::prefix('/sigin')->group(function () {
    Route::get('/', [LoginControllerResource::class, 'index'])->name('login');
    Route::any('/save', [LoginControllerResource::class, 'save'])->name('login.save');
});
Route::prefix('/sigup')->group(function () {
    Route::get('/', [RegisterControllerResource::class, 'index'])->name('Register');
    Route::any('/save', [RegisterControllerResource::class, 'save'])->name('Register.save');
});
//logout
Route::get('/logout', [LogoutController::class, 'logout_system']);
//delete
Route::get('delete-item', [DeleteItemController::class, 'delete']);
//profile
Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth.client');
//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth.client');
Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add')->middleware('auth.client');
Route::post('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove')->middleware('auth.client');
