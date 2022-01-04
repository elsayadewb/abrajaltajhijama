<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//

Route::group(['middleware'=>'Maintenance'],function (){
    Route::get('/login/user','Hompagefrontend@login')->name('login');
    Route::get('/register/user','Hompagefrontend@register')->name('register');
    Route::get('/account/user','Hompagefrontend@account')->name('account');
    Route::any('/edit/user/{id}','Hompagefrontend@account_edit')->name('account_edit');
    Route::any('/order/{order}','Hompagefrontend@destroy_order')->name('order.remove_order');
    Route::post('comment/delete/{id}','Hompagefrontend@destroy_comment')->name('comment.destroy_comment');

    Route::any('/store/comment','Hompagefrontend@store_comment')->name('comment.store_comment');

Route::get('/','Hompagefrontend@index');
Route::get('/cart','Hompagefrontend@cart');
Route::post('/addToCart/{product}','Hompagefrontend@addToCart')->name('cart.add');
Route::get('/shopping-cart','Hompagefrontend@showCart')->name('cart.show');
Route::any('/products/{product}','Hompagefrontend@destroy_product_cart')->name('product.remove_cart');
Route::get('/success/{status}','Hompagefrontend@Makepay');
Route::post('/pay','Hompagefrontend@pay');
Route::get('/all/product','Hompagefrontend@all_product');
//Route::post('/autocomplete/fetch','Hompagefrontend@fetch')->name('autocomplete.fetch');
 Route::get('show/article/{id}','Hompagefrontend@show_article');
Route::post('newsletter_store_front', 'Hompagefrontend@newsletter_store_front');


    Route::get('/search','Hompagefrontend@search')->name('search');
    // ------------------------------------------- ------start Shoppingcart


    Route::get('/cart_cart','CartController@index')->name('cart_add');
    Route::get('/cart/add/{id}','CartController@addItem')->name('additem');
    Route::get('/cart/remove/{id}','CartController@removeItme')->name('removeitme');
//
//    Route::get('/test',function (){
//        Cart::remove('4a734e13ccac27a70100bb2e2a3587f0');
//    })->name('test');
//    Route::get('myid',function (){
//      return   Cart::content();
//    })->name('myid');



// -------------------------------------------------End  Shoppingcart


// -------------------------------------------------
Route::get('article_details','Hompagefrontend@article_details');
Route::get('events','Hompagefrontend@events');
Route::get('show/event/{id}','Hompagefrontend@show_slider');

Route::get('news','Hompagefrontend@news');
Route::get('show/news/{id}','Hompagefrontend@show_news');

Route::get('ads','Hompagefrontend@ads');
Route::get('show/ads/{id}','Hompagefrontend@show_ads');

// -------------------------------------------------
Route::get('show/product/{id}','Hompagefrontend@show');
Route::get('show/department/{id}','Hompagefrontend@show_department');
Route::get('show/all/products','Hompagefrontend@show_all_products_page');

Route::get('lang_front_ar','Hompagefrontend@lang_front_ar');
Route::get('lang_front_en','Hompagefrontend@lang_front_en');

//-----------------
Route::get('/auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
//-----------------



 });//Maintenance

Route::get('maintenance', function () {
//    return dd(setting()->status);
    if (setting()->status == 'open')
    {
        return redirect('/');
    }
     return view('front.maintenance');
 });
if ( url()->current() == 'http://localhost/lern-laravel/add_color_stoke/login'){return back();}




Route::get('storageLink', function () {
//    return php artisan storage:link;
     Artisan::call('storage:link');
          return back();
 });
Route::get('con', function () {
//    return  php artisan config:clear ;
     Artisan::call('config:clear');
          return back();
 });
 Route::get('view', function () {
//    return php artisan view:clear ;
     Artisan::call('view:clear');
          return back();
 }); 
 Route::get('cache', function () {
//    return php artisan cache:clear ;
     Artisan::call('cache:clear');
          return back();
 }); 


 Route::get('seed', function () {
      Artisan::call('migrate:fresh');
          return back();
 });
 Route::get('seed2', function () {
      Artisan::call('migrate:fresh --seed');
          return back();
 }); 
 




Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});



Route::get('relodpage', function () {
       return Redirect::back()->with('message',' success');

});
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout/user', 'HomeController@logout_user')->name('logout_user');
