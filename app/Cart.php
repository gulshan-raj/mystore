<?php

namespace App;

class Cart{

    public $items;
    public $totalQuantity ;
    public $totalPrice ;

    public function __contruct($prevCart){
        if($prevCart != null){
            print_r('previous cart is not null');
            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;
            
        }else{
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;
        }
    }

    public function addItem($id, $product){
        $price = (int) str_replace("$","",$product->price);
        if(is_array($this->items) && array_key_exists($id,$this->items)){
            print_r('inside if');
            $productToAdd = $this->items[$id];
            $productToAdd['quantity']++;
        }else{
            print_r('inside else');
            $productToAdd = ['quantity'=>1, 'price'=>$price, 'data'=>$product];
        }

        $this->items[$id] = $productToAdd;
        $this->totalQuantity++;
        $this->totalPrice = $this->totalPrice + $price;
    }
}