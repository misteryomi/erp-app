<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait RequestValidationTrait {
    
    /**
     * Return a failed messsage and errors bag if validation fails
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
                            response([
                                        "status" => false, 
                                        "message" => "Error in data sent", 
                                        "errors" => $validator->errors()
                                    ], 422)); 
    }
}