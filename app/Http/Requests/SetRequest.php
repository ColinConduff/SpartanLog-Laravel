<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use \Dingo\Api\Http\FormRequest;

class SetRequest extends FormRequest
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
            'repetitions' => 'required|integer|between:1,200',
            'weight' => 'required|numeric|between:0,1000'
        ];
    }
}
