<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PplkStoreRequest extends FormRequest
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
            //
            'logo' => ['image', 'max:1024', 'nullable'],
            'visi' => ['string'],
            'misi' => ['string']
        ];
    }
}
