<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HimpunanUpdateRequest extends FormRequest
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
      'namaSingkat' => ['string', 'nullable'],
      'namaLengkap' => ['string', 'nullable'],
      'kodeWarna' => ['string', 'nullable'],
      'ketuaHimpunan' => ['string', 'nullable'],
      'pembina' => ['string', 'nullable'],
      'tahunBerdiri' => ['integer', 'min:2012', 'max:2021', 'nullable'],
      'filosofiLogo' => ['string', 'nullable'],
      'deskripsi'   => ['string', 'nullable'],
      'logo' => ['file', 'max:1024', 'nullable'],
    ];
  }
}
