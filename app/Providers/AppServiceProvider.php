<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Image;
use App\Models\Collection;


use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if(Product::has('offer')){
            $products = Product::all();

        // }

        // $categories = Category::with('parents')->get();
        // $admins = Admin::all();
         $image = Image::find(1);
         $collection = collection::find(1);

$categories = Category::with('products')->get();
        View()->share([
              'products'=>$products,
              'categories'=>$categories,
              'image'=>$image,
              'collection'=>$collection,


        ]);
    }
}
