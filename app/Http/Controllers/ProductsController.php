<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;
use App\Cart;

class ProductsController extends Controller
{
     public function index()
    {
        /*$products = [ 0=>["name"=>"Iphone","category"=>"Smart Phones","price"=>1000],
        1=>["name"=>"Galaxy","category"=>"Tablets","price"=>2000],
        2=>["name"=>"Sony","category"=>"Tv","price"=>3000],
        ];*/
        //$products = DB::table('products')->get();
        $products = Product::all();
        return view("allproducts",compact("products"));
    }

    public function addProductToCart(Request $request, $id)
    {
        $prevCart = $request->session()->get('cart');
        print_r( $prevCart);
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);
        //dump($cart);
    }
}
