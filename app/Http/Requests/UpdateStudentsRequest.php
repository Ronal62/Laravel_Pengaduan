<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentsRequest extends FormRequest
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
            'txtfull_name' => 'required',
            'txtgender' => 'required',
            'txtemail' => [
                'required',
                Rule::unique('students', 'email')->ignore($this->txtid, 'id_students'),
                'email'
            ],
            'txtphone' => 'required|numeric',
            'txtaddress' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'txtfull_name.required' => ':attribute Tidak Boleh Kosong',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtfull_name' => 'Nama Lengkap',
        ];
    }
}
