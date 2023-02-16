<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => 'required|min:8|confirmed',
        ];
    }

    public function message()
    {
        return[
            "username.required"=>"UserName Cannot Be Empty",
            "email.required"=>"Email Cannot Be Empty",
            "email.email"=>"Not a valid Email",
            "email.unique"=>"User already Exits",
            "password.required"=>"Password Cannot Be Empty",
        ];
    }
}
