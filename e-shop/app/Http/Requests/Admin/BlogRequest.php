<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string|max:255|min:3',
            'subtitle' => 'required|string|max:255|min:3',
            'content' => 'required|string|max:255|min:3',
            'category' => 'required|string|max:255|min:3',
            'author' => 'required',
            'created_at' => 'required',
        ];
    }
    public function messages(){
        return [
            //\
            'image.required' => ':attribute bắt buộc phải chọn',
            'image.mimes' => ':attribute không đúng định dạng',
            'title.required' => ':attribute bắt buộc phải nhập',
            'title.string' => ':attribute không đúng định dạng',
            'title.max' => ':attribute không được quá :max ký tự',
            'title.min' => ':attribute tối thiểu :min ký tự',
            'subtitle.required' => ':attribute bắt buộc phải nhập',
            'title.string' => ':attribute không đúng định dạng',
            'subtitle.max' => ':attribute không được quá :max ký tự',
            'subtitle.min' => ':attribute tối thiểu :min ký tự',
            'content.required' => ':attribute bắt buộc phải nhập',
            'content.string' => ':attribute không đúng định dạng',
            'content.max' => ':attribute không được quá :max ký tự',
            'content.min' => ':attribute tối thiểu :min ký tự',
            'category.required' => ':attribute bắt buộc phải nhập',
            'category.string' => ':attribute không đúng định dạng',
            'category.max' => ':attribute không được quá :max ký tự',
            'category.min' => ':attribute tối thiểu :min ký tự',
            'author.required' => ':attribute bắt buộc phải chọn',
            'created_at.required' => ':attribute bắt buộc phải chọn',
        ];
    }
    public function attributes(){
        return [
            'image' => 'Ảnh',
            'title' => 'Tiêu đề',
            'subtitle' => 'Mô tả',
            'content' => 'Nội dung',
            'category' => 'Danh mục',
            'author' => 'Tác giả',
            'created_at' => 'Ngày tạo',
        ];
    }
}
