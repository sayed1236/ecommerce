<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Collection;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class ImageController extends Controller
{
    public function index()
    {
        $Collections = Collection::all();

        return view('admin.images.add-collection',compact('Collections'));
    }
    public function storecollection(Request $request)
    {
        $collection = Collection::find(1);

        $collection->update($request->except('photo1','photo2','_token'));

        if ($request->file('photo1')) {
             $file = $request->file('photo1');
            $filename = str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $collection->update(['photo1' => $path]);
        }
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $collection->update(['photo2' => $path]);
        }

        return redirect()->back();
    }
    public function show()
    {
        return view('admin.images.add-image');
    }

    public function store(Request $request)
    {
        // return '123';
        $image = Image::find(1);

        $image->update($request->except('photo1','photo2','_token'));

        if ($request->file('photo1')) {
             $file = $request->file('photo1');
            $filename = str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $image->update(['photo1' => $path]);
        }
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $image->update(['photo2' => $path]);
        }

        return redirect()->back();
    }
}
