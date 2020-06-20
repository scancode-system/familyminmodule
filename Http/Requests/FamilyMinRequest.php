<?php

namespace Modules\FamilyMin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FamilyMinRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'min_qty' => 'integer|min:1'
        ];
    }


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
