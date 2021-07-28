<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TugasStoreRequest extends FormRequest
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
      'judul' => ['string', 'required'],
      'deskripsi' => ['string', 'required'],
      'format' => ['string', 'required'],
      'fileTugas' => ['file', 'max:10240', 'required'],
      'start_time' => ['date', 'before:end_time', 'required'],
      'end_time' => ['date', 'after:start_time', 'required']
    ];
  }
}
