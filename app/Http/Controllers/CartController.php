<?php

namespace App\Http\Controllers;
use App\Model\Product;

use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cart =  Cart::content();
        return  view('cart.index',[
            'data'=>$cart
        ]);
    }
    public function addItem($id)
    {
        $pro = Product::find($id);
         Cart::add([
                    'id' => $pro->id,
                    'name' =>$pro->product_name_ar,
                    'description'=>$pro->description_ar,
                    'qty' => 1,
                    'price' =>$pro->price,
                    'tax' =>$pro->tax,

                   ]);

        $cart =  Cart::content();
        return  view('cart.index',[
            'data'=>$cart
        ]);


    }
    public function removeItme($id)
    {

         Cart::remove($id);
          return back();
//return $id;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
