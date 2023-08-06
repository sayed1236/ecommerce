<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = Data::all();
        $userid = Auth()->user()->id;
// foreach($data as $key=>$product) {
//     Cart::session($userid)->add(array(
//         'id' => $product->id,
//         'name' => $product->name,
//         'price' => $product->price,
//         'quantity' => $key+1,
//         'attributes' => array(),
//         'associatedModel' => $product
//     ));
//     $cart = Cart::session($userid)->getTotal();
//     // dd($cart);

// }
// dd(Cart::isEmpty());
        return view('home',compact('data'));
    }
    public function add(Request $request)
    {
        // $data = Data::all();
//    return $request;
        $userid = Auth()->user()->id;
        // $cart = Data::find(8);
      $dat = Cart::session($userid)->add(array(
            'id' => $cart->id ,
            'name' => $cart->name,
            'price' => $cart->price,
            'quantity' => 2,
            'attributes' => array(),
            // 'associatedModel' => $cart
        ));
        // $data = Cart::session($userid)->getContent()->toArray();

        $ad=$dat->getContent();

        return view('form',compact('ad'));
    }

    public function test(Request $request){
        $userid = Auth()->user()->id;

        $ad= Cart::session($userid)->getContent();
        return view('form',compact('ad'));

    }

}
