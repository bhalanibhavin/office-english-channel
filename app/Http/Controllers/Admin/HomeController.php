<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* 
    name    : home
    use     : for actions related to home like dashboard etc.
*/

class HomeController extends Controller
{
    public $view    = '';
    public $index   = '';

    public function __construct() {
        $this->view     = 'admin.home.';
        $this->index    = 'admin/home/index.';
    }

    public function index(Request $request) 
    {
        try {
            $data = [];

            $data['title']  = \Lang::get($this->index.'page_title');
            $data['meta_title']  = \Lang::get($this->index.'meta_title');
            $data['lang']   = $this->index;

            return \View::make($this->view.'index', $data );
        } catch (Exception $e) {
            
        }
    }
}
