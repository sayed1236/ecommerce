<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\ProductAttribute;


class DetailsProductController extends Controller
{
    public function index()
    {
        return view('admin.products.product-details');
    }
    public function store(Request $request){
        Detail::create($request->all());
        return redirect()->back();    
}
    public function attributes(){
        return view('admin.products.product-attributes');
    }
    public function attributesstore(Request $request){
        ProductAttribute::create($request->all());
        return redirect()->back();
    }
}
