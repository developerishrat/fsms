<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function index(){
        return view ('users.index');
    }
    function insert(Request $request)
        {

    	 User::create([
            'name'=>$request->name,
            'email'=>$request->email,
         	'password'=>$request->password,
         	'contact'=>$request->contact,
         	'address'=>$request->address,
        	'role'=>$request->role,
            'status'=>$request->status,

    	]);

        return back()->with('message',' Added successfully');
    }

}
