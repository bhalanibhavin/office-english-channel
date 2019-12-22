<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdministratorRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $rules = [];

        $rules['first_name']        = 'required|max:145';
        $rules['last_name']         = 'required|max:145';

        $data = $request->all();
        
        if($data['id'] != null){
            $id = $data['id'];
        } else {
            $id = null;
        }

        $rules['email']             = 'required|unique:administrators,email,'.$id;
        // $rules['password']          = 'required';

        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['first_name.required']        = \Lang::get('admin/general/administrators/create.first_name_req_err');
        $messages['first_name.max']             = \Lang::get('admin/general/administrators/create.first_name_max_err');
        $messages['last_name.required']         = \Lang::get('admin/general/administrators/create.last_name_req_err');
        $messages['last_name.max']              = \Lang::get('admin/general/administrators/create.last_name_max_err');

        $messages['email.required']             = \Lang::get('admin/general/administrators/create.email_req_err');
        // $messages['password.required']          = \Lang::get('admin/general/administrators/create.password_req_err');

        return $messages;
    }
}
