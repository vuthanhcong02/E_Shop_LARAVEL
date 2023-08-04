<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'image' => 'required|image',
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
            'address' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
            'level' => 'required|integer',
        ];
    }
    public function messages(){
        return [
            'image.required' => ':attribute bắt buộc phải chọn',
            'image.image' => ':attribute phải là định dạng ảnh',
            'name.required' => ':attribute bắt buộc phải nhập',
            'name.string' => ':attribute phải là chữ',
            'name.max' => ':attribute không được tối đa 255 kí tự',
            'name.min' => ':attribute tối thiểu 3 kí tự',
            'email.required' => ':attribute bắt buộc phải nhập',
            'email.string' => ':attribute phải là chữ',
            'email.email' => ':attribute không đúng định dạng email',
            'email.max' => ':attribute không được tối đa 255 kí tự',
            'password.required' => ':attribute bắt buộc phải nhập',
            'password.string' => ':attribute phải là chữ',
            'password.min' => ':attribute tối thiểu 6 kí tự',
            'password_confirmed' => ':attribute không được để trống',
            'address.required' => ':attribute bắt buộc phải nhập',
            'city.required' => ':attribute bắt buộc phải nhập',
            'phone.required' => ':attribute bắt buộc phải nhập',
            'level.required' => ':attribute bắt buộc phải chọn',
        ];
    }
    public function attributes(){
        return [
          'image' => 'Hiển ảnh',
          'name' => 'Tên người dùng',
          'email' => 'Email',
          'password' => 'Password',
          'address' => 'Địa chỉ',
          'city' => 'Tên thành phố',
          'phone' => 'Số điện thoại',
          'level' => 'Dữ liệu',
          'password_confirmation' => 'Re-password',
        ];
    }
}
