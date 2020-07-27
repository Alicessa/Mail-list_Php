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
            'username'=>'required|min:6',
        'password'=>'required',
       
        'em'=>'required|email'
    
        ];
    }
    public function messages()
    {
        return['username.required'=>'用户名必须输入',
        'username.min'=>'用户名最少6位',
        'password.required'=>'密码必须输入',
        'em.email'=>'邮箱错误，请填写正确的格式',
     
        ];

    }
}
