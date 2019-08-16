<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WisataValidation extends FormRequest
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
          'nama' => 'required|unique:wisatas',
          'deskripsi' => 'required|min:100',
          'alamat' => 'required',
          'waktu' => 'required',
          'background' => 'required|mimes:jpeg,bmp,png,jpg|dimensions:min_width=1200,min_height=500',
        ];
    }
}
