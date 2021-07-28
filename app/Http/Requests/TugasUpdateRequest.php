<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TugasUpdateRequest extends FormRequest
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
      'judul' => ['string', 'nullable'],
      'deskripsi' => ['string', 'nullable'],
      'format' => ['string', 'nullable'],
      'fileTugas' => ['file', 'max:10240', 'nullable'],
      'start_time' => ['date', 'before:end_time', 'nullable'],
      'end_time' => ['date', 'after:start_time', 'nullable']
    ];
  }
}
