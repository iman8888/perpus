<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BukuReq extends FormRequest
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
            'judul' => 'required',
            'tempat_terbit' => 'required',
            'tahun_terbit' => 'required',
            'halaman' => 'required', 
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi cuy!!!',
            'numeric' => ':attribute harus diisi Angka Bro!!!',
            'email' => ':attribute harus diisi Format Salah!!!',
        ];
    }
}
