<?php

namespace App\Http\Controllers;
use App\Models\Favourite;
use App\Models\Product;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    //

    public function favourite( $id){
        Favourite::create([
           'product_id'=>$id,
           'user_id'=>auth()->user()->id
        ]);
        return redirect()->back();
    }
    public function wishlist(){
        $wishlist = Favourite::where('user_id',auth()->user()->id)->get();
       foreach ($wishlist as $key => $value) {
            echo $value->product_id;
       };
    //    return view('')
       
    }
}
