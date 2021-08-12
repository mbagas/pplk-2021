<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama'                  => ['required', 'unique:users'],
            'email'                 => ['required', 'unique:users'],
            'password'              => ['required', 'min:6'],
            'password_confirmation' => ['required_with:password', 'same:password', 'min:6'],
            'roles_id'              => ['integer', 'required'],
            'kelompok'              => ['integer', 'nullable'],
            'nim'                   => ['string', 'nullable', 'min:9','unique:users'],
            'instagram'             => ['string', 'nullable'],
            'prodis_id'             => ['integer', 'nullable']
        ];
    }
}
