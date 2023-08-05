<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
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
            'image' =>'image|mimes:jpeg,png,gif',
        ];
    }
    public function messages(){
        return [
            'image.image' => ':attribute phải là file jpeg, png, gif',
            'image.mimes' => ':attribute phải là file jpeg, png, gif',
        ];
    }
    public function attributes(){
        return [
            'image' => 'Tệp được chọn',
        ];
    }
}
