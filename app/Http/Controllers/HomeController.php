<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
        $users = User::orderBy('id','desc')->simplepaginate(4);

        return view('home',compact('users'));
    }
    function add(){
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
