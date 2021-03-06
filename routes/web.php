<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homes_sliderController;

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


// // Route::get('/master', function () {
// //     return view('layout.master');
// // });

Route::get('/home', function () {
    return view('backend.home');
});
Route::get('/categories',[CategoryController::class,'index'] )->name('categories.index');

Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::resource('categories',CategoryController::class);

// // Route::get('/', function () {
// //     return view('ecommerce.model');
// // });

// // Route::get('/details', function () {
// //     return view('tamplate.layout.details');
// // });
// // Route::get('/shop', function () {
// //     return view('ecommerce.shop');
// // });
// // Route::get('/checkout', function () {
// //     return view('tamplate.layout.checkout');
// // });
// // Route::get('/cart', function () {
// //     return view('tamplate.layout.cart');
// // });
// // Route::get('/signup', function () {
// //     return view('ecommerce.sign_up_form');
// // });
// // Route::get('/signin', function () {
// //     return view('ecommerce.login');
// });
Route::resource('sliders',Homes_sliderController::class);