<?php

namespace App\Http\Controllers\Admin;
use App\Model\MallProduct;
use App\Model\OtherData;
use App\Model\Product;
use App\Model\Productdetails;
use App\Model\Flavordetails;

use App\Model\RelatedProduct;
use App\File as FileTbl;
use App\DataTables\ProductsDatatable;
use App\Model\Size;
use App\Model\Weight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use File;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductsDatatable $products)
    {
        return $products->render('back.products.index',['title'=>trans('admin.products')]);
    }
    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        // $products = Product::select(['id', 'product_name_ar', 'product_name_en', 'description_ar', 'description_en']);

        return Datatables::of($products)
            ->addColumn('action', function ($products) {
                return '<a href="#edit-'.$products->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products =  Product::create([
            'product_name_ar'=>'',
        ]);

        if(!empty($products))
        {

            return redirect(aurl('products/'.$products->id.'/edit'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $products = Product::find($id);
        return view('back.products.product',['title'=>trans('admin.create_or_edit_product'),'products'=>$products]);
    }
    public function show($id)
    {
        $products = Product::find($id);
        return dd ($products);
        $title = trans('admin.show');
        return view('back.products.edit',compact('products','title'));
    }


    //-----------------------------------Upload  add_by_photo img
    public function update_add_by_photo ($id) {
        $products = Product::where('id',$id)->update([
            'add_by_photo'=> up()->upload([
                'file'        => 'file',
                'path'        => 'products/'.$id.'/add_by_photo',
                'upload_type' => 'single',
                'delete_file' => '',
            ]),
        ]);
        //'photo' => $products->photo
        return response(['status' => true, ], 200);
    }
    //-----------------------------------Upload  add_by_photo img
    public function update_Product_image ($id) {
        $products = Product::where('id',$id)->update([
            'photo'=> up()->upload([
                'file'        => 'file',
                'path'        => 'products/'.$id.'/main_image',
                'upload_type' => 'single',
                'delete_file' => '',
            ]),
        ]);
        //'photo' => $products->photo
        return response(['status' => true, ], 200);
    }
    //---------------------------------------- delete main img
    public function delete_main_image($id) {
        $products = Product::find($id);
        Storage::delete($products->photo);
        $products->photo = null;
        $products->save();
        // 'id' => $fid],
        return response(['status' => true], 200);
    }
//---------------------------------------- upload
    public function upload_file($id) {
        if (request()->hasFile('file')) {
            $fid =    up()->upload([
                'file'        => 'file',
                'path'        => 'products/'.$id,
                'upload_type' => 'files',
                'file_type'   => 'product',
                'relation_id' =>  $id ,
            ]);
            return response(['status' => true, 'id' => $fid], 200);

        }
    }//End upload
//----------------------------------------  delete
    public function delete_file() {
        if (request()->has('id')) {
            up()->delete(request('id'));
        }
    }//End delete_file
//----------------------------------------
//prepare_wight_size
    public function prepare_wight_size()
    {
        if(request()->ajax() and request()->has('dep_id')){
            $dep_list = array_diff( explode(',', get_parent(request('dep_id'))), [request('dep_id')]);
            $sizes = Size::Where('is_public','yes')
                ->WhereIn('department_id', $dep_list)
                ->orWhere('department_id',request('dep_id'))
                ->pluck('name_' . session('lang'), 'id');

            // $sizes = array_merge(json_decode($size_1,true),json_decode($size_2,true));
            // return  $sizes ;
            $weights = Weight::pluck('name_'.session('lang'), 'id');
            return view('back.products.ajax.size_weight', [
                'sizes'=> $sizes,
                'weights' => $weights,
                'products' => Product::find(request('product_id')),
            ])->render();
        }else{
            return trans('admin.please_choose_a_section');
        }
    }


    public function update($id)
    {
        $data =$this->validate(request(),[

            'product_name_ar'          =>'required',
            'product_name_en'          =>'sometimes|nullable',
            'description_ar'           =>'sometimes|nullable',
            'description_en'           =>'sometimes|nullable',
            'department_id'            =>'sometimes|nullable',
            'add_by_ar'                =>'sometimes|nullable',
            'add_by_en'                =>'sometimes|nullable',
            'discount'                 =>'sometimes|nullable',
            'price_offer'              =>'sometimes|nullable',
            'price_old'                =>'sometimes|nullable',
            // ----------
            'trade_id'                 =>'sometimes|nullable',
            'manu_id'                  =>'sometimes|nullable',
            'flavor_id'                =>'sometimes|nullable',
            'flavor'                   =>'sometimes|nullable',
            'color'                    =>'sometimes|nullable',
            'color_id'                 =>'sometimes|nullable',
            'size_id'                  =>'sometimes|nullable',
            'size'                     =>'sometimes|nullable',
            'currency_id'              =>'sometimes|nullable',
            'start_at'                 =>'sometimes|nullable|date',
            'end_at'                   =>'sometimes|nullable|date',
            'start_offer_at'           =>'sometimes|nullable|date',
            'end_offer_at'             =>'sometimes|nullable|date',
            'other_data'               =>'sometimes|nullable',
            'other_color'               =>'sometimes|nullable',
            'weight'                   =>'sometimes|nullable',
            'weight_id'                =>'sometimes|nullable',
            'status'                   =>'sometimes|nullable|in:pending,refused,active',
            'reason'                   =>'sometimes|nullable',

            'price'                    =>'sometimes|nullable',
            'stock'                    =>'sometimes|nullable',
        ],[],[
        ]);

        //  ------------------------

        if(request()->has('mall'))
        {
            MallProduct::where('product_id',$id)->delete();
            foreach (request('mall') as $mall)
            {
                MallProduct::create([
                    'product_id'=>$id,
                    'mall_id'=>$mall,
                ]);
            }//foreach mall

        }//end mall
//  ------------------------
//  ------------------------

        if(request()->has('related'))
        {
            RelatedProduct::where('product_id',$id)->delete();
            foreach (request('related') as $related)
            {
                RelatedProduct::create([
                    'product_id'=>$id,
                    'related_product'=>$related,
                ]);
            }//foreach mall

        }//end related
//  ------------------------
        //  ------------------------------------------------------------- start Productdetails
//    if you want insert color data  in  field in table products
//                if(request()->has('value_color_id') && request()->has('key_color_qu'))
//                {
//                    $i_color = 0;
//                    $other_color = '';
//                    foreach (request('key_color_qu') as $keycolor)
//                    {
//                    $other_color .= $keycolor.'||'.request('value_color_id')[$i_color].'|';
//                    $i_color++;
//                    }
//                   $data['other_color'] = rtrim($other_color,'|');
//               }
//    if you want insert color data  in  field in table products



        //    if you want insert color data  in  new table   Productdetails

        if(request()->has('key_color_qu'))
        {
            $i_color = 0;
            $other_color = '';
            Productdetails::where('product_id',$id)->delete();
            foreach (request('key_color_qu') as $keycolor)
            {
//                if (!empty($keycolor)){
                    $data_value_color = !empty(request('value_color_id')[$i_color]) ? request('value_color_id')[$i_color] : '';
                    Productdetails::create([
                        'product_id' => $id,
                        'key_color_qu' => $keycolor,
                        'value_color_id' => $data_value_color,
                    ]);
                    $i_color++;
//                } // if  !empty
            }
         }
//        -------------------
   if(request()->has('value_flavor_id') && request()->has('key_flavor_qu'))
        {
            $i_flavor = 0;
            $other_flavor = '';
            Flavordetails::where('product_id',$id)->delete();
            foreach (request('key_flavor_qu') as $keyflavor)
            {
//                if (!empty($keyflavor)){
                    $data_value_flavor = !empty(request('value_flavor_id')[$i_flavor]) ? request('value_flavor_id')[$i_flavor] : '';
                    Flavordetails::create([
                        'product_id' => $id,
                        'key_flavor_qu' => $keyflavor,
                        'value_flavor_id' => $data_value_flavor,
                    ]);
                    $i_flavor++;
//                } // if  !empty
            }
         }


//------------------------------------------------------------------------ End

        if(request()->has('input_value') && request()->has('input_key'))
        {
            $i = 0;
            $other_data = '';
            OtherData::where('product_id',$id)->delete();
            foreach (request('input_key') as $key) {
                $data_value = !empty(request('input_value')[$i])?request('input_value')[$i]:'';
                OtherData::create([
                    'product_id'                 =>$id,
                    'data_key'                  =>$key,
                    'data_value'                =>$data_value,
                ]);
                $i++;
            }
            $data['other_data']=rtrim($other_data,'|');
        }

//        ---------------------------------- start input key
        // if want save data for other table
//        if(request()->has('input_key') && request()->has('input_value'))
//        {
//            $i = 0;
//            $other_data = '';
//            foreach (request('input_key') as $key){
//                $other_data .= $key.'||'.request('input_value')[$i].'|';
//                $i++;
//            }
//            $data['other_data'] = $other_data;
//        }


        // if want save data self table
//        if(request()->has('input_key') && request()->has('input_value'))
//        {
//            $i = 0;
//            $other_data = '';
//            foreach (request('input_key') as $key){
//                $other_data .= $key.'||'.request('input_value')[$i].'|';
//                $i++;
//            }
//            $data['other_data'] = $other_data;
//        }

//        ---------------------------------- End input key
        Product::where('id',$id)->update($data);
        return response(['status'=>true,'message'=>trans('admin.updated_record')],200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response */
    // ------------------ start  copy_product
    public function copy_product($id){
        if(request()->ajax()){
            $relation_data   = Product::find($id);
            $copy   = Product::find($id)->toArray();
            unset($copy['id']);
            $create = Product::create($copy);
            if(!empty($copy['photo']))
            {
                $ext = File::extension($copy['photo']);
                $new_path = 'products/' . $create->id . '/main_image/' .str_random(30).'.'. $ext;
                Storage::copy($copy['photo'], $new_path);
                $create->photo = $new_path;
                $create->save();


// ---------------------------End mall product  copy key val
                foreach ( $relation_data->other_data()->get() as $other_data) {
                    OtherData::create([
                        'product_id'                 =>$create->id,
                        'data_key'                  =>$other_data->data_key,
                        'data_value'                =>$other_data->data_value,
                    ]);
                }
// --------------------------- start mall product other data key val


// ---------------------------End mall product  other data

                foreach ($relation_data->files()->get() as $file)
                {
                    $ext = File::extension($file->full_file);
                    $hashname = str_random(30);
                    $new_path = 'products/'.$create->id .'/' .$hashname.'.'. $ext;
                    Storage::copy($file->full_file, $new_path);
                    $add =  FileTbl::create([
                        'name'			=>  $file->name,
                        'size'			=>	$file->size,
                        'file'			=>	$hashname,
                        'path'			=>	'products/'.$create->id,
                        'full_file'   	=>	'products/'.$create->id.'/'.$hashname.'.'. $ext,
                        'mime_type'		=>  $file->mime_type,
                        'file_type'		=>  'product',
                        'relation_id' 	=>  $create->id,
                    ]);
                }
            }

            return response([
                'status'=>true,
                'message'=>trans('admin.product_created'),
                'id'=>$create->id],200
            );
        } /* request()->ajax*/else{
            return redirect('admin/products');
        }
    }
    // ------------------ End copy_product
    // ------------------ start  product_search
    public function product_search(){
        if(request()->ajax()) {
            if(!empty(request('search')) && request()->has('search')){


                $related_product = RelatedProduct::where('product_id',request('id'))->get(['related_product']);

                $products_search = Product::where('product_name_'.session('lang'),'LIKE','%'.request('search').'%')
                    ->where('id','!=',request('id'))
                    ->whereNotIn('id',$related_product)
                    ->limit(200)
                    ->orderBy('id','desc')
                    ->get();
                return response([
                    'status'=>true,
                    'result'=> count($products_search)>0?$products_search:'',
                    'count'=> count($products_search)
                ],200);

            }
        }//ajax
    }//product_search
// ------------------ End    product_search
    public function deleteProduct($id)
    {
        $products =  Product::find($id);
        Storage::delete($products->photo);
        up()->delete_files($id);
        $products->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/products');
    }
    public function destroy($id)
    {
        $products =  Product::find($id);
        Storage::delete($products->photo);
        up()->delete_files($id);
        $products->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/products');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Product::destroy(request('item'));
            foreach (request('item') as $id)
            {
                $this->deleteProduct($id);
            }
        }/*if*/ else{

            $this->deleteProduct(request('item'));

        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/products');
    }
}
