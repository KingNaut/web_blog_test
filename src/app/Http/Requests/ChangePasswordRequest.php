<?php

namespace App\Http\Requests;

use App\Libs\Messages;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'old_password' => 'required|min:6',
            'password' => 'required|different:old_password|min:6',
            'c_password' => 'required|same:password|min:6'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'old_password.required' => Messages::errors('ERROR_PASSWORD_REQUIRED'),
            'old_password.min' => Messages::errors('ERROR_PASSWORD_MIN'),
            'password.required' => Messages::errors('ERROR_PASSWORD_REQUIRED'),
            'password.min' => Messages::errors('ERROR_PASSWORD_MIN'),
            'password.different' => Messages::errors('ERROR_PASSWORD_DIFFERENT'),
            'c_password.required' => Messages::errors('ERROR_PASSWORD_REQUIRED'),
            'c_password.min' => Messages::errors('ERROR_PASSWORD_MIN'),
            'c_password.same' => Messages::errors('ERROR_PASSWORD_SAME'),
        ];
    }
}
