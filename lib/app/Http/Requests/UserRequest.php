<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        'email'=>'unique:vp_users,email',
        'name'=>'unique:vp_users,name'
        ];
    }
    public function messages(){
     return[
     'email.unique'=>'Email đã tồn tại',
     'name.unique'=>'Tên tài khoản đã tồn tại',
     ];
 }
}
