<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DetailsProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/
Route::group(['prefix'=>'admin'],function(){
    Route::get('loginadmin',[LoginController::class,'index'])->name('admin.login');
    Route::post('loginadminstore',[LoginController::class,'store'])->name('admin.loginstore');


});
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'Is_admin'],function(){
    Route::get('/',[CategoriesController::class,'index'])->name('categories');
    Route::get('add-categories',[CategoriesController::class,'show'])->name('add.categories');
    Route::get('gallerycategory',[CategoriesController::class,'gallery'])->name('categories.gallery');
    Route::post('gallerycategory/store',[CategoriesController::class,'storegallery'])->name('categories.storegallery');

    Route::post('store-categories',[CategoriesController::class,'store'])->name('store.categories');
    Route::delete('delete-category/{id}',[CategoriesController::class,'destroy'])->name('delete.category');
    Route::get('edit-category/{id}',[CategoriesController::class,'edit'])->name('edit.category');
    Route::post('update-category/{id}',[CategoriesController::class,'update'])->name('update.category');



    Route::get('products',[ProductsController::class,'index'])->name('products');
    Route::get('add-products',[ProductsController::class,'show'])->name('show.products');
    Route::get('product-details',[DetailsProductController::class,'index'])->name('productdetails');
    Route::get('product-attributes',[DetailsProductController::class,'attributes'])->name('productattributes');
    Route::Post('store/product-attributes',[DetailsProductController::class,'attributesstore'])->name('productattributes.store');

    Route::post('store/product-details',[DetailsProductController::class,'store'])->name('productdetails.store');

    Route::post('store-products',[ProductsController::class,'store'])->name('store.products');
    Route::delete('delete-product/{id}',[ProductsController::class,'destroy'])->name('delete.product');
    Route::get('edit-product/{id}',[ProductsController::class,'edit'])->name('edit.product');
    Route::post('update-product/{id}',[ProductsController::class,'update'])->name('update.product');
    Route::get('gallery-product',[ProductsController::class,'gallery'])->name('gallery.product');
    Route::post('store/gallery-product',[ProductsController::class,'storegallery'])->name('storegallery.product');

    Route::get('users',[UsersController::class,'index'])->name('users');
    Route::delete('delete-user/{id}',[UsersController::class,'destroy'])->name('delete.user');

    Route::get('admins',[AdminController::class,'index'])->name('admins');
    Route::get('add-admin',[AdminController::class,'show'])->name('show.admins');
    Route::post('store/admin',[AdminController::class,'store'])->name('admins.store');
    Route::get('add-admin',[AdminController::class,'show'])->name('show.admins');

    // Route::get('images',[ImageController::class,'index'])->name('images');
    Route::get('add-image',[ImageController::class,'show'])->name('show.images');
    Route::post('store/image',[ImageController::class,'store'])->name('images.store');
    Route::get('add-collection',[ImageController::class,'index'])->name('index.collection');
    Route::post('store/collection',[ImageController::class,'storecollection'])->name('collection.store');

});

