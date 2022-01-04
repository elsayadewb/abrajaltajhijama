<?php
namespace App\Http\Controllers;
use App\Cart;
use App\Comment;
use App\File;
 use App\Model\Product;
use App\Frontend;
use App\Model\Department;
 use App\Model\News;
use App\Model\About;
 use App\Slider;
use App\User;
use App\Model\Offers;
use App\Model\Questions;
use Illuminate\Foundation\Auth ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Session;
use DB;
//-----------------start Apypal Class
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
//-----------------End   Apypal Class
 class Hompagefrontend extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
//ُEnd  sopping cart ------------------
    public function index()
    {
        // ...................................
        // $products_last_record = DB::table('products')->orderBy('id', 'DESC')->first();
        $products_last_record = Product::orderBy('created_at', 'DESC')->paginate(10);
        $products_first_record = Product::orderBy('created_at', 'ASC')->paginate(10);
        $products_paginate = Product::orderBy('created_at', 'DESC')->paginate(100);
         $last_products = Product::all();
        $products_paginate_footer_one = Product::orderBy('created_at', 'DESC')->paginate(12);
        $products_paginate_footer_two = Product::orderBy('created_at', 'ASC')->paginate(12);
        // ...................................
         $products = Product::all();
        $offers = Offers::all();
        $questions = Questions::all();
        $frontends = Frontend::all();
        $slider = Slider::all();
        $news = News::all();
         $abouts = About::all();
         $departments = Department::all();
        $files = File::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->paginate(6);
        // session()->forget('lingfront');
        return view('front.index', [
            'files' => $files,
            'offers' => $offers,
            'questions' => $questions,
            'departments' => $departments,
            'slider' => $slider,
             'news' => $news,
             'abouts' => $abouts,
             'products' => $products,
            'products_last_record' => $products_last_record,
            'products_first_record' => $products_first_record,
            'frontends' => $frontends,
            'products_paginate' => $products_paginate,
            'departments_paginate' => $departments_paginate,
            'products_paginate_footer_one' => $products_paginate_footer_one,
            'products_paginate_footer_two' => $products_paginate_footer_two,

        ]);


    }





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
