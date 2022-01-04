<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     public  $items               = [];
     public  $totalQty            = [];
     public  $totalPrice          = [];
     public function __construct( $cart = null)
     {
        if ($cart){

            $this->items         = $cart->items;
            $this->totalQty      = $cart->totalQty;
            $this->totalPrice    = $cart->totalPrice;

        }  else{


            $this->items         = [];
            $this->totalQty      = 0 ;
            $this->totalPrice    = 0 ;
        }
     }//__construct

    public function add( $product )
    {
        $item = [
            'title'            => $product->product_name_en,
            'price'            => $product->price,
            'qty'              => 0,
            'photo'            => $product->photo,
            'id'               => $product->id,
         ];
        if (!array_key_exists($product->id,$this->items)){
            $this->items[$product->id] = $item;
            $this->totalQty            +=1;
            $this->totalPrice          += $product->price;
        }else{
            $this->totalQty +=1;
            $this->totalPrice          += $product->price;

        }
        $this->items[$product->id]['qty'] +=1 ;
    }//add
    public function remove( $id )
    {
        if (array_key_exists($id,$this->items)){
            $this->totalQty            -= $this->items[$id]['qty'];
            $this->totalPrice           -= $this->items[$id]['qty']*$this->items[$id]['price'];
            unset($this->items[$id]);
         }
    }
} //Cart extends Model


