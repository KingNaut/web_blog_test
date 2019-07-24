<?php

namespace App\Http\Requests;

use App\Libs\Messages;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditUserRequest extends FormRequest
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
            'username' => 'required|regex:/^([a-zA-Z0-9_\.\-])/i',
            'status' => 'required|in:active,inactive,blocked',
            'avatar' => 'image|mimes:jpeg,bmp,png|max:10240',
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
            'email.required' => Messages::errors('ERROR_EMAIL_REQUIRED'),
            'email.regex' => Messages::errors('ERROR_EMAIL_REGEX'),
            'email.max' => Messages::errors('ERROR_EMAIL_MAX'),
            'permission.required' => Messages::errors('ERROR_PERMISSION_REQUIRED'),
            'username.required' => Messages::errors('ERROR_USERNAME_REQUIRED'),
            'username.regex' => Messages::errors('ERROR_USERNAME_REGEX'),
            'status.required' => Messages::errors('ERROR_STATUS_REQUIRED'),
            'status.in' => Messages::errors('ERROR_STATUS_IN'),
            'avatar.image' => Messages::errors('ERROR_AVATAR_IMAGE'),
            'avatar.mimes' => Messages::errors('ERROR_AVATAR_MIMES'),
            'avatar.max' => Messages::errors('ERROR_AVATAR_MAX'),
            'permission.in' => Messages::errors('ERROR_PERMISSION_IN')
        ];
    }
}
