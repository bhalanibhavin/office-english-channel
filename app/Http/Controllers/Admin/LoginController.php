<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\DB\Administrator;

use App\Http\Requests\Admin\LoginCheckRequest;

/* 
    name    : login
    use     : for actions related to login like login, forgot password, reset password etc. 
*/

class LoginController extends Controller
{
    public $view    = '';
    public $index   = '';

    public function __construct() {
        $this->view     = 'admin.login.';
        $this->index    = 'admin/login/login.';
    }

    /* 
        name    : index
        use     : for get view for login into admin panel.
    */
    public function index(Request $request) {
        try {
            $data = [];

            $data['title']      = \Lang::get($this->index.'page_title');
            $data['meta_title'] = \Lang::get($this->index.'page_title');
            $data['lang']       = $this->index;

            return \View::make($this->view.'index', $data );
        } catch (Exception $e) {
            
        }
    }

    /*
        name    : postLogin
        use     : for check login details of the user 
    */
    public function postLogin(LoginCheckRequest $request) {
        try {
            $data = $request->all();

            $email      = $data['username'];
            $password   = $data['password'];
            $remember   = @(isset($data['remember'])) ? true : false;

            $credentials = [ 'email' => $email, 'password' => $password ];

            if ($user = \Sentinel::authenticate($credentials, $remember)) {
                \Session::flash('success', 'You are successfully logged into Quickdone Admin Panel.' );
                return redirect(route('admin.home'));
            }

            \Session::flash('error', 'Please enter correct username & password.');
            return \Redirect::back();
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            \Session::flash('error', 'Your account is not activated yet. Please contact our site administrator for more info.');
            return \Redirect::back();
        }
        catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            $delay = $e->getDelay();
            \Session::flash('error', 'Your account is blocked for ($delay) seconds. Please contact our site administrator for more info.');
            return \Redirect::back();
        }
        return Redirect::back()->withErrors(['global' => 'Login problem please contact the administrator']);
    }

    
}
