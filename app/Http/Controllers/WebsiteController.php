<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $products=Product::all();
        $userid = Auth()->user()->id;

            $carts= Cart::session($userid)->getContent();
            // return 'h';
            // $products['offer'];
            // foreach($products as $product){

            //     echo $product->offer;
            // }
            //             return 'h';


        return view('website.index',compact('carts'));
    }
    public function show($id){
        $product = Product::find($id);
        // return $product;
        $userid = Auth()->user()->id;

        $carts= Cart::session($userid)->getContent();

        return view('website.show',compact('product','carts'));
    }

    public function store(Request $request){
// return $request->all();
       $userid = Auth()->user()->id;
        // $cart = Data::find(8);
      $dat = Cart::session($userid)->add(array(
            'id' => $request->id ,
            'name' => $request->name,
            'photo' => $request->photo,
            'price' => '314',
            'quantity' => $request->quantity,
            'attributes' => array(
                'photo' => $request->photo,

            ),
            // 'associatedModel' => $request
        ));
        //   $carts= Cart::session($userid)->getContent();
//          foreach ($carts as $key => $cart) {
//             echo $cart->attributes->photo;
//          }
// return '123';
        return redirect()->back();
           }

        public function cart(){
            $userid = Auth()->user()->id;

            $carts= Cart::session($userid)->getContent();

            return view('website.cartlist',compact('carts'));
        }
        public function shop(){


            return view('website.shop');
        }

}
