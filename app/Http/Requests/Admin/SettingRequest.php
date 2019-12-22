<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        $rules = [];

        $rules['admin_email']              = 'required|email|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['admin_email.required']             = \Lang::get('admin/general/settings/create.email_req_err');
        $messages['admin_email.max']                  = \Lang::get('admin/general/settings/create.max_email_req_err');
        $messages['admin_email.email']                = \Lang::get('admin/general/settings/create.valid_email_req_err');

        return $messages;
    }
}

