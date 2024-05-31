<?php

namespace App\Http\Requests\SuratKeluar;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuratKeluarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'no_letter'   => 'required',
            'regarding'   => 'required',
            'purpose'     => 'required',
            'date_letter' => 'required',
            'file'        => 'nullable|mimes:pdf,png,jpg,jpeg|max:1024'
        ];
    }

    public function messages(): array
    {
        return [
            'no_letter.required'   => 'Nomor surat harus diisi.',
            'regarding.required'   => 'Perihal harus diisi',
            'purpose.required'     => 'Tujuan harus diisi.',
            'date_letter.required' => 'Tanggal surat harus diisi.',
            'file.mimes'           => 'Format file harus berupa pdf/png/jpg/jpeg.',
            'file.max'             => 'Ukuran file maksimal 1 mb.'
        ];
    }
}