<?php

namespace App\Http\Requests;

use App\Libs\Messages;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|regex:/^([a-zA-Z0-9_\.\-])+\@appota.com/i|max:255',
            'password' => 'required|min:6',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $messenger = new Messages();
        return [
            'email.required' => Messages::errors('ERROR_EMAIL_REQUIRED'),
            'email.regex' => Messages::errors('ERROR_EMAIL_REGEX'),
            'email.max' => Messages::errors('ERROR_EMAIL_MAX'),
            'password.required' => Messages::errors('ERROR_PASSWORD_REQUIRED'),
            'password.min' => Messages::errors('ERROR_PASSWORD_MIN'),
        ];
    }
}
