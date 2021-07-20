<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduationStoreRequest extends FormRequest
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
            'graduation_id' => 'nullable',
            'semester_1'    => 'required|min:0|max:4',
            'semester_2'    => 'required|min:0|max:4',
            'semester_3'    => 'required|min:0|max:4',
            'semester_4'    => 'required|min:0|max:4',
            'semester_5'    => 'nullable|min:0|max:4',
            'semester_6'    => 'nullable|min:0|max:4',
            'semester_7'    => 'nullable|min:0|max:4',
            'semester_8'    => 'nullable|min:0|max:4',
            'type'          => 'required',
        ];
    }
}
