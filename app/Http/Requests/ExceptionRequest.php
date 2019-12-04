<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\RequestValidationTrait;

class ExceptionRequest extends FormRequest
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
            'title' => 'required',
            'hod_id' => 'required|exists:wp_users,id',
            'assigned_to' => 'required|exists:wp_users,id',
            'message' => 'required',
//            'attachment' => 'image'
        ];
    }
}
