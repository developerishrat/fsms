<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuelController extends Controller
{
    //
    function index(){
        return view ('layouts.backend.fuel.index');
    }
    function insert(Request$request)

    {

     $fuels_image = $request->file('image');
     $file_name= '';

        if($request->hasFile('image')){
         $file_name = uniqid('admin',true).date('Ymdhms').'.'.$fuels_image->getClientOriginalExtension();
          }

          $fuels_image->move(public_path('/uploads/admin'),$file_name);

        $data =[
            'name'=>$request->name,
            'image'=>$file_name,
            'price'=>$request->price,
        ];
        return back()->with('success','Successfully Added');
    }


}
