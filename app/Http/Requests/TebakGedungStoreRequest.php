<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TebakGedungStoreRequest extends FormRequest
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
            'gambar' => ['image', 'max:5024', 'required'],
            'pil1' => [ 'string', 'required'],
            'pil2' => [ 'string', 'required'],
            'pil3' => [ 'string', 'required'],
            'pil4' => [ 'string', 'required'],
            'jawaban' => [ 'string', 'required'],
            'skor' => ['int', 'required']
        ];
    }
}
