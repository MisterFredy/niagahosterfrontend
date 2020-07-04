<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\price;

class priceController extends Controller
{
    //
   public function index(){
        return response()->json(Price::All());
    }

    public function store(Request $request){
        return price::create($request->all());
    }
}
