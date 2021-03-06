<?php
namespace App\DataTables;
use App\Model\Product;
use Yajra\DataTables\Services\DataTable;

class ProductsDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */

    public function dataTable($query) {
        return datatables($query)
            ->addColumn('checkbox', 'back.products.btn.checkbox')
            ->addColumn('edit', 'back.products.btn.edit')
            ->addColumn('delete', 'back.products.btn.delete')
            ->addColumn('show', 'back.products.btn.show')
            ->addColumn('image', 'back.products.btn.image')
            ->addColumn('link', 'back.products.btn.link')
            ->addColumn('link_two', 'back.products.btn.link_two')
            ->rawColumns([
                'checkbox',
                'edit',
                'delete',
                'show',
                'link',
                'link_two',
                'image'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Admin $model
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function query()
    {
        return Product::query()->where(function ($q)
        {
            if(request()->has('department_id'))
            {
                return $q->where('department_id',request('department_id'));
            }//if
        });//$q
    }//query
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
          //  ->addAction(['width' => '80px'])
            // ->parameters($this->getBuilderParameters());
            ->parameters([
                'dom'=>'Blfrtip',
              'lengthMenu'=>[[10,25,50,100,-1],[10,25,50,trans('admin.all_record')]],

                'buttons'=>[
                    [ 'text'=>' <i class="fa fa-trash"></i> ','className'=>'btn btn-danger delBtn'],

//                    ['text' => '<a class="fa fa-plus"></i> ' .trans('admin.create_new_product').'<i class="fa fa-cube"> ', 'className' => 'btn
//                    btn_crete_new_row_products btn-info'],

                    [
                        'text' => '<i class="fa fa-plus"></i> ' . trans('admin.create_new_product'), 'className' => 'btn btn-info', "action" => "function(){

							window.location.href = '" . \URL::current() . "/create';
						}", ],
							


                    datatable_buttons_include(),
                ]
              ,//buttons
                    'initComplete'=>" function () {
                    this.api().columns([1]).every(function () {
                    var column = this;
                    var input = document.createElement(\"input\");
                    $(input).appendTo($(column.footer()).empty())
                    .on('keyup', function () {
                    column.search($(this).val(), false, false, true).draw();
                    });
                    });
                    }",
              'language'=>datatable_lang(),

            ]);//parameters
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            [
                'name'       => 'checkbox',
                'data'       => 'checkbox',
                'title'      => '<input type="checkbox" class="check_all" onclick="check_all()" />',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ], [
                'name'  => 'product_name_'.session('lang'),
                'data'  => 'product_name_'.session('lang'),
                'title' => trans('admin.product_name_'.session('lang')),
            ], [
                'name'  => 'link',
                'data'  => 'link',
                 'title' => trans('admin.link_name'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],
//            [
//                'name'  => 'id',
//                'data'  => 'id',
//                'title' => '#',
//            ],
//             [
//                'name'  => 'updated_at',
//                'data'  => 'updated_at',
//                'title' => trans('admin.updated_at'),
//            ],
            [
                'name'  => 'image',
                'data'  => 'image',
                'title' => trans('admin.photo_product'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ], [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
            ],[
                'name'       => 'edit',
                'data'       => 'edit',
                'title'      => trans('admin.edit'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],[
                'name'       => 'delete',
                'data'       => 'delete',
                'title'      => trans('admin.delete'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],[
                'name'       => 'show',
                'data'       => 'show',
                'title'      => trans('admin.show'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Products_' . date('YmdHis');
    }
}
