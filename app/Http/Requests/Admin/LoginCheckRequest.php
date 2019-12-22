<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginCheckRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = $this->request->all();
        $rules['username'] = 'required|email';
        $rules['password'] = 'required'; 

        return $rules;
    }

    public function messages() {
        $messages = array();

        $messages['username.required']      = \Lang::get('admin/general/login/login.username_req_err');
        $messages['username.email']         = \Lang::get('admin/general/login/login.username_invalid_err');
        $messages['password.required']      = \Lang::get('admin/general/login/login.password_req_err');

        return $messages;
    }
}
