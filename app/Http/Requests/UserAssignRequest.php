<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAssignRequest extends FormRequest
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
            'staff_ids' => 'required',
            'unit_id' => 'required|exists:department_units,id',
        ];
    }
}
