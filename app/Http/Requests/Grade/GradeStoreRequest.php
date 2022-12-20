<?php

namespace App\Http\Requests\Grade;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class GradeStoreRequest extends FormRequest
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
            'course_id' => 'required|integer',
            'term_id' => 'required|integer',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'message' => 'Validation Error',
                'data'  => $validator->errors()
            ]
        ));
    }

    public function messages()
    {
        return [
            'course_id.required' => 'Course ID is required',
            'course_id.integer' => 'Course ID must be an integer',
            'term_id.required' => 'Term ID is required',
            'term_id.integer' => 'Term ID must be an integer',
        ];
    }
}
