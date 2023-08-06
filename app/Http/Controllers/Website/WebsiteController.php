<?php

namespace App\Http\Controllers\Website;
use App\Models\Product;
use App\Models\Cart;
use App\Models\GalleryProduct;
use App\Models\Review;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Detail;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('location.website');
    }
    public function show($id){
        $products = Product::where('category_id',$id)->get();
        return view('location.shop.showproductforeverycategory',compact('products'));
    }
    public function shop(){
        return view('location.shop.index');
    }
    public function storecart( $id){
         Cart::create([
            'product_id'=>$id,
            'user_id'=>auth()->user()->id
         ]);
         return redirect()->back();
    }
    public function shopDetail($id){
        $product = Detail::with('products')->find($id)->get();
        $activephoto = Product::find($id);
       $images = GalleryProduct::where('product_id',$id)->get();
       $review  = Review::where('product_id',$id)->get();
        // dd($product);
        return view('location.productdetails.product-detail',compact('product','images','activephoto','review'));
    }

    public function storereview(Request $request){
        // return $request->all();
        Review::create($request->all());
        return redirect()->back();
    }


    public function logout(){
        Session::flush();

        Auth::logout();
        return redirect('login');
    }
}
