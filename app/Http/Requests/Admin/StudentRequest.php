<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

        $rules['first_name']        = 'required|max:145';
        $rules['last_name']         = 'required|max:145';
        $rules['course']            = 'required|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['first_name.required']        = \Lang::get('admin/students/create.first_name_req_err');
        $messages['first_name.max']             = \Lang::get('admin/students/create.first_name_max_err');
        $messages['last_name.required']         = \Lang::get('admin/students/create.last_name_req_err');
        $messages['last_name.max']              = \Lang::get('admin/students/create.last_name_max_err');
        $messages['course.required']         = \Lang::get('admin/students/create.course_req_err');
        $messages['course.max']              = \Lang::get('admin/students/create.course_max_err');

        return $messages;
    }
}
