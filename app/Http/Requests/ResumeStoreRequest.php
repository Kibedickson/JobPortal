<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeStoreRequest extends FormRequest
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
        return [
            'title' => 'required',
            'location' => 'required',
            'age' => 'required',
            'degree' => 'required',
            'field' => 'required',
            'school' => 'required',
            'year' => 'required',
            'skill' => 'required'
        ];
    }
}
