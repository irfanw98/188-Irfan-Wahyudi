<?php

namespace App\Http\Requests\Pengirim;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePengirimRequest extends FormRequest
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
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|max:13|min:10',
            'address'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Nama harus diisi.',
            'email.required'    => 'Email harus diisi.',
            'address.required'  => 'Alamat harus diisi.',
            'phone.required'    => 'Nomor telepon harus diisi.',
            'phone.min'         => 'Nomor telepon minimal 10 angka.',
            'phone.max'         => 'Nomor telepon maksimal 13 angka',
        ];
    }
}