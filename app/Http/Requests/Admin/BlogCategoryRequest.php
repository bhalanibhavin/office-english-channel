<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
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

        $rules['category_name']        = 'required|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['category_name.required']        = \Lang::get('admin/general/categories/create.category_name_req_err');
        $messages['category_name.max']             = \Lang::get('admin/general/categories/create.category_name_max_err');

        return $messages;
    }
}
