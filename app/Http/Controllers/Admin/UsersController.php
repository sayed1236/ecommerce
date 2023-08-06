<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.users',compact('users'));
    }
    public function destroy($id){
    
   
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
