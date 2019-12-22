<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\General;

use App\Http\DB\PageContent;
use App\Commands\Admin\PageContentStoreCommand;

class PageContentController extends Controller
{
    public $view    = '';
    public $index   = '';
    public $create  = '';
    public $edit    = '';

    public function __construct() {
        $this->view     = 'admin.page-content.';
        $this->index    = 'admin/page-content/index.';
        $this->create   = 'admin/page-content/create.';
        $this->edit     = 'admin/page-content/edit.';
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
            $data['record']     = PageContent::where('id', $id)->first();
            $data['index']      = '1';

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
            $result = $this->dispatch(new PageContentStoreCommand($data, $request, 'edit'));

            if ($result) {
                Session::flash('success', \Lang::get($this->index.'edit_success_msg') );
                // return redirect(route('admin.settings.index'));
                return Redirect::back()->withInput();
            } else {
                Session::flash('error', \Lang::get($this->index.'edit_error_msg'));
                return Redirect::back()->withInput();
            }
        } catch (Exception $e) {
            return \Redirect::back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

}

