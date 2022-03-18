<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    //
    function index(){
        return view ('layouts.backend.purchase.index');
    }
    function insert(Request $request)
        {

    	 Purchase::create([
            'name'=>$request->name,


    	]);

        return back()->with('success',' Added successfully');
    }
}
