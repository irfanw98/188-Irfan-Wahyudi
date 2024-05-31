<?php

namespace App\Http\Requests\SuratMasuk;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuratMasukRequest extends FormRequest
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
            'no_letter'     => 'required',
            'sender_id'     => 'required',
            'regarding'     => 'required',
            'date_letter'   => 'required',
            'date_received' => 'required',
            'file'          => 'nullable|mimes:pdf,jpg,png,jpeg|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'no_letter.required'     => 'Nomor surat harus diisi.',
            'sender_id.required'     => 'Pengirim harus dipilih.',
            'regarding.required'     => 'Perihal harus diisi.',
            'date_letter.required'   => 'Tanggal surat harus diisi.',
            'date_received.required' => 'Tanggal diterima surat harus diisi.',
            'file.mimes'             => 'Format file harus berupa pdf/jpg/png/jpeg.',
            'file.max'               => 'Ukuran file maksimal 1 mb.'
        ];
    }
}