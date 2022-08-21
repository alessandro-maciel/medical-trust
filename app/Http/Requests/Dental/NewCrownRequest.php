<?php

namespace App\Http\Requests\Dental;

use Illuminate\Foundation\Http\FormRequest;

class NewCrownRequest extends FormRequest
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
            'type' => ['required', 'string', 'max:45'],
            'material' =>  ['required', 'string', 'max:45'],
            'location' =>  ['required', 'string', 'max:45'],
            'implemented' => ['required', 'date'],
        ];
    }
}
