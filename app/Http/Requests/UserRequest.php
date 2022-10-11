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
        $req_route = \Request::route();
        switch ($req_route->action['as']) {
            case 'sign_up.store':
                return [
                    'first_name'            => 'required|string|min:2',
                    'last_name'             => 'required|string|min:2',
                    'email'                 => 'required|unique:users|email',
                    'password'              => 'required|confirmed',
                    'password_confirmation' => 'required'
                ];
                break;
            case 'sign_in.store':
                return [
                    'email'                 => 'required|email',
                    'password'              => 'required',
                ];
                break;
            case 'forgot.check':
                return [
                    'email'                 => 'required'
                ];
            case 'create.password.store':
                return [
                    'password'              => 'required|confirmed',
                    'password_confirmation' => 'required'
                ];
        }
    }
}
