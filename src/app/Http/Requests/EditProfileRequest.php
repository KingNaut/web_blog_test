<?php

namespace App\Http\Requests;

use App\Libs\Messages;
use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'username' => 'required|regex:/^([a-zA-Z0-9_\.\-])/i',
            'avatar' => 'image|mimes:jpeg,bmp,png|max:10240',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => Messages::errors('ERROR_USERNAME_REQUIRED'),
            'username.regex' => Messages::errors('ERROR_USERNAME_REGEX'),
            'avatar.image' => Messages::errors('ERROR_AVATAR_IMAGE'),
            'avatar.mimes' => Messages::errors('ERROR_AVATAR_MIMES'),
            'avatar.max' => Messages::errors('ERROR_AVATAR_MAX'),
        ];
    }
}
