<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EnterFlightRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "passport_no" => [
                "required",
                "string",
                "max:12"
            ],
            "flights" => [
                "required",
                "array"
            ],
            "flights.*.*" => [
                "required",
                "string",
                "max:6"
            ],
        ];
    }
}
