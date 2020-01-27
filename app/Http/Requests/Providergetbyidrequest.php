<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
//this code show the message of request
use Illuminate\Http\Exceptions\HttpResponseException;


class Providergetbyidrequest extends FormRequest
{
      //this code show the message of request
      protected function failedValidation(Validator $validator)
      {
          throw new HttpResponseException(response()->json($validator->errors(), 422));
      }
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
            'id'=>'required|integer|'
        ];
    }
}
