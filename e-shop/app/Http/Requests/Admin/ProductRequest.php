<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'brand_id' => 'required',
            'product_category_id' => 'required',
            'name' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:255',
            'price' => 'required|numeric|min:0',
            'discount' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'tag_id' => 'required',
            'description' => 'required|min:3|max:255',
        ];
    }
    public function messages(){
        return [
            'brand_id.required' => ':attribute phải được chọn',
            'product_category_id.required' => ':attribute phải được chọn',
            'name.required' => ':attribute phải nhập',
            'name.min' => ':attribute phải có ít nhất 3 ký tự',
            'name.max' => ':attribute phải có nhiều nhất 255 ký tự',
            'content.required' => ':attribute phải nhập',
            'content.min' => ':attribute phải có ít nhất 3 ký tự',
            'content.max' => ':attribute phải có nhiều nhất 255 ký tự',
            'price.required' => ':attribute phải nhập',
            'price.numeric' => ':attribute phải là số',
            'price.min' => ':attribute phải có ít nhất  = 0',
            'discount.required' => ':attribute phải nhập',
            'discount.numeric' => ':attribute phải là số',
            'discount.min' => ':attribute phải có ít nhất  = 0',
            'weight.required' => ':attribute phải nhập',
            'weight.numeric' => ':attribute phải là số',
            'weight.min' => ':attribute phải có ít nhất  = 0',
            'tag_id.required' => ':attribute phải được chọn',
            'description.required' => ':attribute phải nhập',
            'description.min' => ':attribute phải có ít nhất 3 ký tự',
            'description.max' => ':attribute phải có nhiều nhất 255 ký tự',
        ];
    }
    public function attributes(){
        return [
            'brand_id' => 'Tên thương hiệu',
            'product_category_id' => 'Danh mục sản phẩm',
            'name' => 'Tên sản phẩm',
            'content' => 'Nội dung',
            'price' => 'Giá',
            'discount' => 'Giảm giá',
            'weight' => 'Khối lượng',
            'tag' => 'Tag',
            'description' => 'Mô tả',
        ];
       
    }
}
