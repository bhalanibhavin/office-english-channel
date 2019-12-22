<?php

namespace App\Http\Requests\Admin\General;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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

        $rules['title']                 = 'required|max:145';
        $rules['meta_title']            = 'required';
        // $rules['post_category_id']      = 'required';


        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['title.required']             = \Lang::get('admin/general/pages/create.title_req_err');
        $messages['title.max']                  = \Lang::get('admin/general/pages/create.title_max_err');
        $messages['meta_title.required']        = \Lang::get('admin/general/pages/create.meta_title_req_err');
        // $messages['post_category_id.required']  = \Lang::get('admin/general/pages/create.post_category_id_req_err');

        return $messages;
    }
}
