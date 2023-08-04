<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|unique:brands,name',
        ];
    }
    public function messages(){
        return [
            'name.required' => ':attribute bắt buộc phải nhập',
            'name.string' => ':attribute phải là chữ',
            'name.unique' => ':attribute đã tồn tại',
        ];
    }
    public function attributes(){
        return [
            'name' => 'Tên brand',
        ];
    }

}
