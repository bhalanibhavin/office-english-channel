<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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

        $rules['title']             = 'required|max:145';
        $rules['blog_category_id']  = 'required';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['title.required']             = \Lang::get('admin/blogs/create.title_req_err');
        $messages['title.max']                  = \Lang::get('admin/blogs/create.first_name_max_err');
        $messages['blog_category_id.required']  = \Lang::get('admin/blogs/create.blog_category_id_req_err');

        return $messages;
    }
}
