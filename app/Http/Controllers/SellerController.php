<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use  App\Product;

class SellerController extends Controller{
    public function submitProduct(Request $request){
        $name = $request->name;
        $description = $request->description;
        $image = $request->image;
        $price = $request->price;
        $type = $request->type;
        Product::create([
            'name' => $name,
            'description' => $description,
            'image' => $image,
            'price' => $price,
            'type' => $type
        ]);

        return response()->json([ 'message'=>'Insert successfully']);
    }
}
