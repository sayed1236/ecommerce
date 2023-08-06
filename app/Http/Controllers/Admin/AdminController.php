<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
       
        return view('admin.admins.admins');
    }
    public function show()
    {
        return view('admin.admins.add-admin');
    }

    public function store(Request $request)
    {
        // Admin::create($request->all());
        return redirect()->back();
    }
}
