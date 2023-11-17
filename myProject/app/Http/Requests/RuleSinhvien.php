<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleSinhvien extends FormRequest
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
            'name' => ['required','min:3','max:20'],
            'age' => 'required|integer|min:16|max:100',
            'adress' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'phải nhập dữ liệu',
            'age.required'=> 'bạn phải nhập tuổi của mình',
            'age.min' => 'tuoi phai tren 16',
            'adress.required' => 'ban nhap dia chi hop le',
            'name.min' => 'ban nhap phai co khoang trang'
        ];
    }
}
