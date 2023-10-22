<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestServiceRequest extends FormRequest
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
        return 
        [
            'firstName'=>'required|min:3|max:25',
            'lastName'=>'required|min:3|max:25',
            'email'=>'required|string|email|max:30',
            'cell_phone_number'=>'required|min:7|max:20',
            'subject'=>'required',
            'message'=>'max:400',
            'g-recaptcha-response' => 'required|captcha'
        ];

    }

}
