<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KabinetStoreRequest extends FormRequest
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
            'nama'      => ['string'],
            'presiden'  => ['string'],
            'sekjen'    => ['string'],
            'organigram'=> ['image', 'max:5120', 'nullable'],
            'logo'      => ['image', 'max:1024', 'nullable'],
            'filosofiLogo' => ['string'],
            'deskripsi' => ['string']
        ];
    }
}
