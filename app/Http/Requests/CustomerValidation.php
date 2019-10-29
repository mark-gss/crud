<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CustomerValidation extends FormRequest
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
            "name" => "bail|required|max:5",
            "address" => "bail|required",
            "phoneNumber" => "bail|required"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->session()->flash('error', "ERROR:Cannot be process");
        parent::failedValidation($validator);
    }

    public function message()
    {
        return [
            "name.required" => "Name is required!",
            "address.required" => "address is required!",
            "phoneNumber.required" => "phoneNumber is required!"
        ];
    }
}
