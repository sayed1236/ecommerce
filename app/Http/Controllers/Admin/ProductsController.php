<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Galleryproduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  dd($mainproducts->mainproducts);
         $relations = Category::with('products')->get();
        return view('admin.products.index',compact('relations'));
    }
    public function show()
    {

         $relations = Category::with('products')->get();
        return view('admin.products.add',compact('relations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->has('offer')){
            // return $request->all();
            $product =  Product::create($request->except('photo', '_token'));
            // return $product;
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename = Str::uuid() . $file->getClientOriginalName();
                $file->move(public_path('products'), $filename);
                $path = 'products/' . $filename;
                $product->update(['photo' => $path ]);


            }
            // return redirect()->back();
        }else {
            // return $request->all();


        $product =  Product::create($request->except('photo', '_token'));
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('products'), $filename);
            $path = 'products/' . $filename;
            $product->update(['photo' => $path]);
        }
    }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function addproduct(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.add',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('admin.products');
    }
    public function gallery(){
        return view('admin.products.gallery');
    }
    public function storegallery(Request $request){

        // return $request->all();
        $product_id = $request->product_id;

        if ($files = $request->file('gallery')) {
            // dd ($file = $request->file('gallery'));

            foreach($files as $file){

            $filename = Str::uuid()  . $file->getClientOriginalName();
            $file->move(public_path('galleryproducts'), $filename);
            $path = 'galleryproducts/' . $filename;
            Galleryproduct::create(['gallery' => $path,
            'product_id'=>$product_id
        ]);
    }
    return redirect()->back();

        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
