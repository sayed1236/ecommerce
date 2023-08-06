<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        // $admin = new Admin();
        // $admin->name = "sayed";
        // $admin->email="sayed@123";
        // $admin->password=bcrypt('saiko123');
        // $admin->save();
        return view('admin.authadmin.login');
    }
    // $admin = new Admin();
    // $admin->name = "sayed";
    // $admin->email="sayed@123";
    // $admin->password=bcrypt('saiko123');
    // $admin->save();
    public function store(Request $request){
        if(auth()->guard('Is_admin')->attempt(['email' => $request->input('email'), 'password' =>$request->input('password')]) ){
            return redirect()->route('admin.categories');

        }else{
            return redirect()->back();
        }

  }
}
