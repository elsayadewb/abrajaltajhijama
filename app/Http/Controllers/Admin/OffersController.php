<?php

namespace App\Http\Controllers\Admin;
use App\Model\Offers;
use App\DataTables\OffersDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OffersDatatable $offers)
    {
        $offers_all = Offers::orderBy('created_at','DESC')->paginate(6);
        // Offers::orderBy('id', 'desc');


       return $offers->render('back.offers.index',['title'=>trans('admin.offers'),'offers_all'=>$offers_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $offers = Offers::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($offers)
            ->addColumn('action', function ($offers) {
                return '<a href="#edit-'.$offers->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.offers.create',['title'=>trans('admin.create-offers')]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$this->validate(request(),[
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'content_ar'               =>'sometimes|nullable',
            'content_en'               =>'sometimes|nullable',
            'start_at'                 =>'sometimes|nullable',
            'end_at'                   =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'required|'.v_image(),
        ],[
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'content_ar'                 =>trans('admin.content_ar'),
            'content_en'                 =>trans('admin.content_en'),
            'start_at'                 =>trans('admin.start_at'),
            'end_at'                 =>trans('admin.end_at'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'offers',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Offers::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/offers');

    }
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
                  'title_ar'                 =>'sometimes|nullable',
                  'title_en'                 =>'sometimes|nullable',
                  'content_ar'                 =>'sometimes|nullable',
                  'content_en'                 =>'sometimes|nullable',
                  'start_at'                 =>'sometimes|nullable',
                  'end_at'                 =>'sometimes|nullable',
                  'link'                     =>'sometimes|nullable',
                  'photo'                    =>'required|'.v_image(),
              ],[
                  'title_ar'                 =>trans('admin.title_ar'),
                  'title_en'                 =>trans('admin.title_en'),
                  'content_ar'                 =>trans('admin.content_ar'),
                  'content_en'                 =>trans('admin.content_en'),
                  'start_at'                 =>trans('admin.start_at'),
                  'end_at'                 =>trans('admin.end_at'),
                  'link'                     =>trans('admin.link'),
                  'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'offers',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Offers::Create($data);
        session()->flash('successhome', trans('admin.record_added') );
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $offers = Offers::find($id);
        $title = trans('admin.edit');
         return view('back.offers.edit',compact('offers','title'));
    }
        public function show($id)
    {
        $offers = Offers::find($id);
       return dd ($offers);
        $title = trans('admin.show');
         return view('back.offers.edit',compact('offers','title'));
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
$data =$this->validate(request(),[
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'content_ar'                 =>'sometimes|nullable',
            'content_en'                 =>'sometimes|nullable',
          'start_at'                 =>'sometimes|nullable',
          'end_at'                 =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'sometimes|nullable|'.v_image(),
         ],[
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'content_ar'                 =>trans('admin.content_ar'),
            'content_en'                 =>trans('admin.content_en'),
            'start_at'                 =>trans('admin.start_at'),
            'end_at'                 =>trans('admin.end_at'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'offers',
                        'upload_type' =>'single',
                        'delete_file' =>Offers::find($id)->photo,
                    ]);
                }
 
        Offers::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Offers::find($id)->delete();
         $offers =  Offers::find($id);
         Storage::delete($offers->photo);
         $offers->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/offers');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Offers::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $offers =  Offers::find($id);
                Storage::delete($offers->photo);
                $offers->delete();
            }

        }/*if*/ else{
            // Offers::find(request('item'))->delete();
              $offers =  Offers::find(request('item'));
                Storage::delete($offers->photo);
                $offers->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/offers');
    }
}
