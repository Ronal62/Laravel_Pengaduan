<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
         return [
        'txtid' => 'required|unique:students,id_students|min:7|max:7',
        'txtfull_name' => 'required',
        'txtgender' => 'required',
        'txtemail' => 'required',
        'txtphone' => 'required',
        'txtaddress' => 'required',
    ];
    }

     public function messages(): array
    {
         return [
        'txtid.required' => 'Tidak Boleh Kosong',
        'txtid.unique' => 'Sudah Ada Di Dalam Table',
        'txtfull_name.required' => 'Tidak Boleh Kosong',
    ];
    }
}
