<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UkmUpdateRequest extends FormRequest
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
            'pembina'           => ['string', 'nullable'],
            'ketuaUmum'         => ['string', 'nullable'],
            'tahunBerdiri'      => ['integer', 'min:2012', 'max:2020', 'nullable'],
            'logo'              => ['image', 'max:1024', 'nullable'],
            'barcode'           => ['image', 'max:1024', 'nullable'],
            'filosofiLogo'      => ['string', 'nullable']
        ];
    }
}
