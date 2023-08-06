<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\FavouriteController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'website', 'as'=>'website.','middleware'=>'auth' ],function(){
    Route::get('/',[WebsiteController::class,'index'])->name('index');

    Route::get('showproducts/{id}',[WebsiteController::class,'show'])->name('show');
    Route::get('shop',[WebsiteController::class,'shop'])->name('shop');
    Route::get('shopDetail/{id}',[WebsiteController::class,'shopDetail'])->name('shopDetail');

    Route::get('addtocart/{id}',[WebsiteController::class,'storecart'])->name('storecart');

    Route::post('storereview',[WebsiteController::class,'storereview'])->name('storereview');
  



    Route::get('logout',[WebsiteController::class,'logout'])->name('logout');




});
// Route::get('test',function(){
//    return view('location.website');
// });
// Route::group([ 'middleware' => 'auth', 'as'=>'website.' ],function(){
//    Route::get('website',[WebsiteController::class,'index'])->name('index');
//    Route::get('show/{id}',[WebsiteController::class,'show'])->name('show');
//    Route::post('addcart',[WebsiteController::class,'store'])->name('addcart');
//    Route::get('cartlist',[WebsiteController::class,'cart'])->name('cartlist');
//    Route::get('shop',[WebsiteController::class,'shop'])->name('shop');
//    Route::get('favourite/{id}',[FavouriteController::class,'favourite'])->name('favourite');
//    Route::get('wishlist',[FavouriteController::class,'wishlist'])->name('wishlist');



// // Route::post('test',[HomeController::class,'test'])->name('add');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
