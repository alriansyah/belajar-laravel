<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // ubah jadi true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nim' => 'unique:siswa|max:8|required',
            'name' => 'max:10|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'class_id' => 'class',
        ];
    }

    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi.!',
            'nim.max' => 'NIM tidak boleh lebih dari :max karakter.!',
            'name.required' => 'Nama wajib diisi.!',
            'gender.required' => 'Gender wajib diisi.!',
            'class_id.required' => 'Kelas wajib diisi.!'
        ];
    }
}