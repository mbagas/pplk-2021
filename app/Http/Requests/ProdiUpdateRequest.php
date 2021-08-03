<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdiUpdateRequest extends FormRequest
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
            'kepalaProdi'       => ['string', 'nullable'],
            'akreditasi'        => ['string', 'nullable', 'max:2'],
            'tahunBerdiri'      => ['integer', 'min:2012', 'max:2021', 'nullable'],
            'ruangProdi'        => ['string', 'nullable'],
            'jumlahMahasiswa'   => ['integer', 'nullable'],
            'diagramAlir'       => ['image', 'max:1024', 'nullable'],
            'jurusans_id'       => ['integer', 'required']
        ];
    }
}
