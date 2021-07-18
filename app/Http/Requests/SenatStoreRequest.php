<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenatStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'ketua'     => ['string'],
            'deskripsi' => ['string'],
            'website'   => ['string'],
            'youtube'   => ['string'],
            'instagram' => ['string']
        ];
    }
}
