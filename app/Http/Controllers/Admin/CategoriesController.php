<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use app\Helpers\general;
// C:\xampp\htdocs\e-commerce\app\Helpers\general.php
use \Illuminate\Support\Str;
use App\Models\CategoryAttribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function gallery(){
        return view('admin.categories.gallery');
    }
    public function storegallery(Request $request){
                // dd($request->all()) ;
                $category_id = $request->category_id;

        if ($files = $request->file('gallery')) {
            foreach($files as $file){

            // $file = $request->file('gallery');
            $filename = Str::uuid()  . $file->getClientOriginalName();
            $file->move(public_path('gallerycategories'), $filename);
            $path = 'gallerycategories/' . $filename;
            CategoryAttribute::create(['gallery' => $path,
            'category_id'=>$category_id
        ]);
        }
        return redirect()->back();
    }
    }
    public function index()
    {

    $categories = Category::with('children')->get();

    return view('admin.categories.index',compact('categories'));

}

    public function show()
    {
        $categories  = Category::all();
        return view('admin.categories.add',compact('categories'));
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
    //    return $request->photo;
       $category =  Category::create($request->except('photo', '_token'));
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('categories'), $filename);
            $path = 'categories/' . $filename;
            $category->update(['photo' => $path]);
        }

        // $categories  = Category::all();

        return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
    public function addcategory()
    {

        $categories = Category::all();
        return view('admin.categories.add',compact('categories','public'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $value = Category::find($id);
        $categories = Category::all();

        return view('admin.categories.edit', compact('value','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $category = Category::find($id);
       $category->update($request->all());
       return redirect()->route('admin.categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();

    }
}
