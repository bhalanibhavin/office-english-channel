<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\General;

use App\Http\DB\FooterLink;
use App\Http\DB\Page;
use App\Http\DB\General\Menu;
use App\Http\DB\PostCategory;
use App\Commands\Admin\General\FooterLinkStoreCommand;
use App\Http\Request\Admin\General\FooterLinkRequest;


class FooterLinksController extends Controller
{
    //
    public $view    = '';
    public $index   = '';
    public $create  = '';
    public $edit    = '';

    public function __construct() {
        $this->view     = 'admin.general.footerlinks.';
        $this->index    = 'admin/general/footerlinks/index.';
        $this->create   = 'admin/general/footerlinks/create.';
        $this->edit     = 'admin/general/footerlinks/edit.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    public function create(Request $request)
    {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->create.'title');
            $data['meta_title'] = \Lang::get($this->create.'meta_title');
            $data['lang']       = $this->create;
            $data['view']       = $this->view;
            $data['record']     = new FooterLink;
            $data['index']      = '1';

            //Pages Category
            $list               = PostCategory::where('status', '=', '1')->orderBy('name')->get();

            $data['postCategory_list'] =[ '' => \Lang::get($this->create.'select_post_category_lbl') ];
            foreach($list AS $record) {
                $data['postCategory_list'][$record->id]    = $record->name;
            }

            //Page
            $pagelist        = Page::where('status', '=', '1')->orderBy('title')->get();

            $data['page_list'] = [ '' => \Lang::get($this->create.'select_page_lbl') ];
            foreach($pagelist AS $recordPage) {
                $data['page_list'][$recordPage->id]    = $recordPage->title;
            }

            $data['column_list']    = [ '' => \Lang::get($this->create.'select_column_lbl'), '1' => 'Column 1', '2' => 'Column 2' ];


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
    public function store(Request $request)
    {

        try {
            $data = $request->all();
            //$data['create_by']  = \Sentinel::getUser()->id;
            $data['create_by']  = 1;
            $data['sequence_number']  = 1;
            $result = $this->dispatch(new FooterLinkStoreCommand($data, $request, 'new'));

            if ($result) {
                Session::flash('success', \Lang::get($this->index.'create_success_msg') );
                return redirect(route('admin.general.footerlinks.index'));
            } else {
                Session::flash('error', \Lang::get($this->index.'create_error_msg'));
                return Redirect::back()->withInput();
            }
        } catch (Exception $e) {
            return \Redirect::back()->withInput()->withErrors([$e->getMessage()]);
        }
    }
    public function getList(Request $request) {
        try {
            $list = FooterLink::get();

            return Datatables::of($list)
                ->rawColumns(['id', 'name', 'status', 'action'])
                ->addColumn('id', function($record) {
                    return '#'.$record->id;
                })
               /* ->addColumn('name', function($record) {
                    if($record->postCategory != ''){
                        return $record->postCategory->name;
                    } else {
                        return ' ';
                    }
                })*/
                ->addColumn('name', function($record) {
                    return $record->name;
                })
                ->addColumn('status', function($record) {
                    if($record->status=='1') {
                        return '<span class="label label-success"> Active </span>';
                    } else {
                        return '<span class="label label-danger"> Inactive </span>';
                    }
                })
                ->addColumn('action', function($record) {
                    return '<a href="'.\URL::route('admin.general.footerlinks.edit', [ 'id' => $record->id ]).'" class="btn blue btn-icon-only btn-outline"><i class="fa fa-edit"></i></a>&nbsp;
                                <a href="javascript:;" onClick="deleteRow(\''.$record->id.'\');" id="'.$record->id.'" class="btn red-thunderbird btn-icon-only btn-outline" data-url="' . \URL::route('admin.general.footerlinks.delete', ['id' => $record->id]) . '"><i class="fa fa-trash-o"></i></a>';
                })
                ->make(true);
        } catch (Exception $e) {
            return '{"draw":1,"recordsTotal":0,"recordsFiltered":0,"data":[],"input":{"draw":"1","columns":[{"data":"id","name":"id","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"name","name":"name","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"email","name":"email","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"username","name":"username","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"status","name":"status","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"action","name":"action","searchable":"false","orderable":"false","search":{"value":null,"regex":"false"}}],"order":[{"column":"0","dir":"asc"}],"start":"0","length":"10","search":{"value":null,"regex":"false"},"_":"1502345271485"}}';
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->edit.'title');
            $data['meta_title'] = \Lang::get($this->edit.'meta_title');
            $data['lang']       = $this->edit;
            $data['view']       = $this->view;
            $data['record']     = FooterLink::where('id', $id)->first();
            $data['index']      = '1';

            $list               = PostCategory::where('status', '=', '1')->orderBy('name')->get();

            $data['postCategory_list'] = [ '' => \Lang::get($this->create.'select_post_category_lbl') ];
            foreach($list AS $record) {
                $data['postCategory_list'][$record->id]    = $record->name;
            }

            //Page
            $pagelist        = Page::where('status', '=', '1')->orderBy('title')->get();

            $data['page_list'] = [ '' => \Lang::get($this->create.'select_page_lbl') ];
            foreach($pagelist AS $recordPage) {
                $data['page_list'][$recordPage->id]    = $recordPage->title;
            }

            $data['column_list']    = [ '' => \Lang::get($this->create.'select_column_lbl'), '1' => 'Column 1', '2' => 'Column 2' ];
            
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
    public function update(Request $request)
    {
        try {
            $data = $request->all();
            //$data['update_by']  = \Sentinel::getUser()->id;
            $data['update_by']  = 1;
            $data['sequence_number']  = 1;
            $result = $this->dispatch(new FooterLinkStoreCommand($data, $request, 'edit'));

            if ($result) {
                Session::flash('success', \Lang::get($this->index.'edit_success_msg') );
                return redirect(route('admin.general.footerlinks.index'));
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
            $result = $this->dispatch(new FooterLinkStoreCommand($data, $request, 'delete'));

            if ($result == 'done') {
                Session::flash('success', \Lang::get($this->index.'delete_success_msg') );
                return redirect(route('admin.general.footerlinks.index'));
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
}
