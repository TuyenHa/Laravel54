<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'=>'unique:vp_categories,cate_name', 
        'link'=>'unique:vp_categories,cate_link', 
        ];
    } 
    public function messages(){
        return [
        'name.unique'=>'Tên danh mục đã tồn tại',
        'link.unique'=>'Tên link thân thiện đã tồn tại',
        ];
    }
}
