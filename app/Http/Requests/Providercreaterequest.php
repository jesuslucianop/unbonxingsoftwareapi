<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;

use Illuminate\Http\Exceptions\HttpResponseException;




class Providercreaterequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
{
    throw new HttpResponseException(response()->json($validator->errors(), 422));
}
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
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
            'page'=>'required',
            'email'=>'required',
            'extension'=>'required',
            'zipcode'=>'required',
            'identification_rnc'=>'required|integer|',
            'id_location'=>'required|integer|',
            'notification'=>'required',
            'id_currency'=>'required|integer|',
            'id_status'=>'required|integer|',
            'note'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'firstname is requerid',
            'lastname.required' => 'lastname  is requerid'
          
        
        ];
    }
}
