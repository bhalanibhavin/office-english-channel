<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\General;

use App\Http\DB\BlogCategory;
use App\Http\DB\Blog;
use App\Commands\Admin\BlogStoreCommand;
use App\Http\Requests\Admin\BlogRequest;

class BlogsController extends Controller
{
    public $view    = '';
    public $index   = '';
    public $create  = '';
    public $edit    = '';

    public function __construct() {
        $this->view     = 'admin.blogs.';
        $this->index    = 'admin/blogs/index.';
        $this->create   = 'admin/blogs/create.';
        $this->edit     = 'admin/blogs/edit.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->index.'title');
            $data['meta_title'] = \Lang::get($this->index.'meta_title');
            $data['lang']       = $this->index;

            return \View::make($this->view.'index', $data );
        } catch (Exception $e) {
            Session::flash('error', \Lang::get($this->index.'unexpected_err_msg') );
            return redirect(route('admin.home'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->create.'title');
            $data['meta_title'] = \Lang::get($this->create.'meta_title');
            $data['lang']       = $this->create;
            $data['view']       = $this->view;
            $data['record']     = new Blog;
            $data['index']      = '1';        

            $list               = BlogCategory::orderBy('category_name')->where('status', '=', '1')->get();
            $data['blog_category_list']   = [ '' => \Lang::get($this->create.'select_blog_category_lbl') ];
            foreach($list AS $rec) {
                $data['blog_category_list'][$rec->id] = $rec->category_name;
            }                

            return \View::make($this->view.'create', $data );
        } catch (Exception $e) {
            Session::flash('error', \Lang::get($this->index.'unexpected_err_msg') );
            return redirect(route('admin.home'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $data = $request->all();
            $result = $this->dispatch(new BlogStoreCommand($data, $request, 'new'));

            if ($result) {
                Session::flash('success', \Lang::get($this->index.'create_success_msg') );
                return redirect(route('admin.blogs.index'));
            } else {
                Session::flash('error', \Lang::get($this->index.'create_error_msg'));
                return Redirect::back()->withInput();
            }
        } catch (Exception $e) {
            return \Redirect::back()->withInput()->withErrors([$e->getMessage()]);
        }
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
        try {
            $data = [];

            $data['title']      = \Lang::get($this->edit.'title');
            $data['meta_title'] = \Lang::get($this->edit.'meta_title');
            $data['lang']       = $this->edit;
            $data['view']       = $this->view;
            $data['record']     = Blog::where('id', $id)->first();
            $data['index']      = '1';

            $list               = BlogCategory::orderBy('category_name')->where('status', '=', '1')->get();
            $data['select_blog_category_lbl']   = [ '' => \Lang::get($this->create.'select_category_lbl') ];
            foreach($list AS $rec) {
                $data['blog_category_list'][$rec->id] = $rec->category_name;
            }     

            return \View::make($this->view.'edit', $data );
        } catch (Exception $e) {
            Session::flash('error', \Lang::get($this->index.'unexpected_err_msg') );
            return redirect(route('admin.home'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request)
    {
        try {
            $data = $request->all();
            $result = $this->dispatch(new BlogStoreCommand($data, $request, 'edit'));

            if ($result) {
                Session::flash('success', \Lang::get($this->index.'edit_success_msg') );
                return redirect(route('admin.blogs.index'));
            } else {
                Session::flash('error', \Lang::get($this->index.'edit_error_msg'));
                return Redirect::back()->withInput();
            }
        } catch (Exception $e) {
            return \Redirect::back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $data = $request->all();
            $data['id']         = $id;
            $result = $this->dispatch(new BlogStoreCommand($data, $request, 'delete'));

            if ($result == 'done') {
                Session::flash('success', \Lang::get($this->index.'delete_success_msg') );
                return redirect(route('admin.blogs.index'));
            } else if($result == 'exists') {
                Session::flash('error', \Lang::get($this->index.'delete_denied_msg'));
                return Redirect::back()->withInput();
            } else {
                Session::flash('error', \Lang::get($this->index.'.delete_error_msg'));
                return Redirect::back()->withInput();
            }
        } catch (Exception $e) {
            return \Redirect::back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function getList(Request $request) {
        try {
            $list = Blog::get();

            return Datatables::of($list)
                    ->rawColumns(['id', 'title', 'last_name', 'written_by', 'status', 'action'])
                    ->addColumn('id', function($record) {
                        return '#'.$record->id;
                    })
                    ->addColumn('title', function($record) {
                        return $record->title;
                    })
                    ->addColumn('written_by', function($record) {
                        return $record->written_by;
                    })
                    ->addColumn('status', function($record) {
                        if($record->status=='1') {
                            return '<span class="label label-success"> Active </span>';
                        } else {
                            return '<span class="label label-danger"> Inactive </span>';
                        }
                    })
                    ->addColumn('action', function($record) {
                        return '<a href="'.\URL::route('admin.blogs.edit', [ 'id' => $record->id ]).'" class="btn blue btn-icon-only btn-outline"><i class="fa fa-edit"></i></a>&nbsp;
                                <a href="javascript:;" onClick="deleteRow(\''.$record->id.'\');" id="'.$record->id.'" class="btn red-thunderbird btn-icon-only btn-outline" data-url="' . \URL::route('admin.blogs.delete', ['id' => $record->id]) . '"><i class="fa fa-trash-o"></i></a>';       
                    })
                    ->make(true);
        } catch (Exception $e) {
            return '{"draw":1,"recordsTotal":0,"recordsFiltered":0,"data":[],"input":{"draw":"1","columns":[{"data":"id","name":"id","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"name","name":"name","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"email","name":"email","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"username","name":"username","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"status","name":"status","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"action","name":"action","searchable":"false","orderable":"false","search":{"value":null,"regex":"false"}}],"order":[{"column":"0","dir":"asc"}],"start":"0","length":"10","search":{"value":null,"regex":"false"},"_":"1502345271485"}}';
        }
    }
}
