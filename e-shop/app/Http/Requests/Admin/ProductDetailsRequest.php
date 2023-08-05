<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailsRequest extends FormRequest
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
            'color' => 'required | string | regex:/^[a-zA-Z0-9\s]+$/',
            'size' => 'required | string | regex:/^[a-zA-Z0-9\s]+$/',
            'qty' => 'required | string | min:1',
        ];
    }
    public function messages(): array{
        return [
            //
            'color.required' => ':attribute bắt buộc phải nhập',
            'color.string' => ':attribute phải là chữ ',
            'color.regex' => ':attribute không chứ kí tự đặc biệt',
            'size.required' => ':attribute bắt buộc phải nhập',
            'size.string' => ':attribute phải là chữ ',
            'size.regex' => ':attribute không chứ kí tự đặc biệt',
            'qty.required' => ':attribute bắt buộc phải nhập',
            'qty.string' => ':attribute phải là chữ ',
            'qty.min' => ':attribute bé nhất là = 1',
        ];
    }
    public function attributes(): array{
        return [
            //
            'color' => 'Color',
            'size' => 'Size',
            'qty' => 'Số lượng',
        ];
    }
}
