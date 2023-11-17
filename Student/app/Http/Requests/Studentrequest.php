<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Studentrequest extends FormRequest
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
            "studentname"=> "required|string|max:50",
            "studentage"=> "required",
            "address"=>"required",
        ];
    }
    public function messages(): array{
        return [
            "studentname.required"=> "Vui long nhap ten",
            "studentname.string"=> "phai la mot chuoi",
            "studentname.max"=> "khong qua 50 ki tu",
            "studentage.required"=> "Vui long nhap tuoi ",
            "address.required"=>"Vui long nhap dia chi",
        ];
    }
    
}
