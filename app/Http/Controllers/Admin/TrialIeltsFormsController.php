<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\General;

use App\Http\DB\TrialIeltsForms;
use App\Commands\Admin\TrialIeltsFormsStoreCommand;

class TrialIeltsFormsController extends Controller
{
    public $view    = '';
    public $index   = '';
    public $create  = '';
    public $show    = '';

    public function __construct() {
        $this->view     = 'admin.trialieltsforms.';
        $this->index    = 'admin/trialieltsforms/index.';
        $this->create   = 'admin/trialieltsforms/create.';
        $this->show    = 'admin/trialieltsforms/show.';
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->show.'title');
            $data['meta_title'] = \Lang::get($this->show.'meta_title');
            $data['lang']       = $this->show;
            $data['view']       = $this->view;
            $data['record']     = TrialIeltsForms::where('id', $id)->first();
            $data['index']      = '1';            

            return \View::make($this->view.'show', $data );
        } catch (Exception $e) {
            Session::flash('error', \Lang::get($this->index.'unexpected_err_msg') );
            return redirect(route('admin.home'));
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
            $result = $this->dispatch(new TrialIeltsFormsStoreCommand($data, $request, 'delete'));

            if ($result == 'done') {
                Session::flash('success', \Lang::get($this->index.'delete_success_msg') );
                return redirect(route('admin.trialieltsforms.index'));
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
            $list = TrialIeltsForms::get();

            return Datatables::of($list)
                    ->rawColumns(['id', 'full_name', 'email', 'action'])
                    ->addColumn('id', function($record) {
                        return '#'.$record->id;
                    })
                    ->addColumn('name', function($record) {
                        return $record->full_name;
                    })
                    ->addColumn('email', function($record) {
                        return $record->email;
                    })                    
                    ->addColumn('status', function($record) {
                        if($record->status=='1') {
                            return '<span class="label label-success"> Active </span>';
                        } else {
                            return '<span class="label label-danger"> Inactive </span>';
                        }
                    })
                    ->addColumn('action', function($record) {
                        return '<a href="'.\URL::route('admin.trialieltsforms.show', [ 'id' => $record->id ]).'" class="btn blue btn-icon-only btn-outline"><i class="fa fa-eye"></i></a>&nbsp;
                                <a href="javascript:;" onClick="deleteRow(\''.$record->id.'\');" id="'.$record->id.'" class="btn red-thunderbird btn-icon-only btn-outline" data-url="' . \URL::route('admin.trialieltsforms.delete', ['id' => $record->id]) . '"><i class="fa fa-trash-o"></i></a>';       
                    })
                    ->make(true);
        } catch (Exception $e) {
            return '{"draw":1,"recordsTotal":0,"recordsFiltered":0,"data":[],"input":{"draw":"1","columns":[{"data":"id","name":"id","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"name","name":"name","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"email","name":"email","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"username","name":"username","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"status","name":"status","searchable":"true","orderable":"true","search":{"value":null,"regex":"false"}},{"data":"action","name":"action","searchable":"false","orderable":"false","search":{"value":null,"regex":"false"}}],"order":[{"column":"0","dir":"asc"}],"start":"0","length":"10","search":{"value":null,"regex":"false"},"_":"1502345271485"}}';
        }
    }
}
