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
            'txtemail' => 'required|email|unique:students,email',
            'txtphone' => 'required|numeric',
            'txtaddress' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute Tidak Boleh Kosong',
            'txtid.unique' => ':attribute Sudah Ada Di Dalam Table',
            'txtfull_name.required' => ':attribute Tidak Boleh Kosong',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtid' => 'ID Students',
            'txtfull_name' => 'Nama Lengkap',
        ];
    }
}
