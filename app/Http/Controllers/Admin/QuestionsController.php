<?php

namespace App\Http\Controllers\Admin;
use App\Model\Questions;
use App\DataTables\QuestionsDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class questionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QuestionsDatatable $questions)
    {
        $questions_all = Questions::orderBy('created_at','DESC')->paginate(6);
        // Questions::orderBy('id', 'desc');


       return $questions->render('back.questions.index',['title'=>trans('admin.questions'),'questions_all'=>$questions_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $questions = Questions::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($questions)
            ->addColumn('action', function ($questions) {
                return '<a href="#edit-'.$questions->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.questions.create',['title'=>trans('admin.create-questions')]);

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
                        'path'        =>'questions',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Questions::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/questions');

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
                        'path'        =>'questions',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Questions::Create($data);
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

        $questions = Questions::find($id);
        $title = trans('admin.edit');
         return view('back.questions.edit',compact('questions','title'));
    }
        public function show($id)
    {
        $questions = Questions::find($id);
       return dd ($questions);
        $title = trans('admin.show');
         return view('back.questions.edit',compact('questions','title'));
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
                        'path'        =>'questions',
                        'upload_type' =>'single',
                        'delete_file' =>Questions::find($id)->photo,
                    ]);
                }
 
        Questions::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Questions::find($id)->delete();
         $questions =  Questions::find($id);
         Storage::delete($questions->photo);
         $questions->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/questions');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Questions::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $questions =  Questions::find($id);
                Storage::delete($questions->photo);
                $questions->delete();
            }

        }/*if*/ else{
            // Questions::find(request('item'))->delete();
              $questions =  Questions::find(request('item'));
                Storage::delete($questions->photo);
                $questions->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/questions');
    }
}
