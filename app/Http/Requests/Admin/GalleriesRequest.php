<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesRequest extends FormRequest
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

        $rules['title']        = 'required|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['title.required']        = \Lang::get('admin/galleries/create.title_req_err');
        $messages['title.max']             = \Lang::get('admin/galleries/create.title_max_err');

        return $messages;
    }
}
