<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Exercise1Request extends FormRequest
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
            'num1' => 'required|numeric|min:0',
            'num2' => 'required|numeric|min:0',
            'num3' => 'required|numeric|min:0',
            'num4' => 'required|numeric|min:0',
        ];
    }
}
