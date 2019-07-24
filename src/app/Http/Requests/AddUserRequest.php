<?php

namespace App\Http\Requests;

use App\Libs\Messages;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddUserRequest extends FormRequest
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
            'avatar' => 'image|mimes:jpeg,bmp,png|max:10240',
            'username' => 'required|regex:/^[a-zA-Z]/i',
            'email' => 'required|regex:/^([a-zA-Z0-9_\.\-])+\@appota.com/i|max:255',
            'password' => 'required|min:6',
            'status' => 'required|in:active,inactive,blocked',
            'permission' => [
                'required',
                Rule::in(['root', 'staff', 'guest'])
            ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'avatar.image' => Messages::errors('ERROR_AVATAR_IMAGE'),
            'avatar.mimes' => Messages::errors('ERROR_AVATAR_MIMES'),
            'avatar.max' => Messages::errors('ERROR_AVATAR_MAX'),
            'username.required' => Messages::errors('ERROR_USERNAME_REQUIRED'),
            'username.regex' => Messages::errors('ERROR_USERNAME_REGEX'),
            'email.required' => Messages::errors('ERROR_EMAIL_REQUIRED'),
            'email.unique' => Messages::errors('ERROR_EMAIL_UNIQUE'),
            'email.regex' => Messages::errors('ERROR_EMAIL_REGEX'),
            'email.max' => Messages::errors('ERROR_EMAIL_MAX'),
            'password.required' => Messages::errors('ERROR_PASSWORD_REQUIRED'),
            'password.min' => Messages::errors('ERROR_PASSWORD_MIN'),
            'permission.required' => Messages::errors('ERROR_PERMISSION_REQUIRED'),
            'status.required' => Messages::errors('ERROR_STATUS_REQUIRED'),
            'status.in' => Messages::errors('ERROR_STATUS_IN'),
            'permission.in' => Messages::errors('ERROR_PERMISSION_IN')
        ];
    }
}
