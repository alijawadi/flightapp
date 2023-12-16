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
            /**
             * Passport Number of the user.
             * @example C12345678
             */
            "passport_no" => [
                "required",
                "string",
                "max:12"
            ],
            /**
             * The flight origin and destination. first element is origin and second is destination.
             * @example [["SFO","EWR"]]
             */
            "flights" => [
                "required",
                "array"
            ],

            "flights.*.*" => [
                "required",
                "string",
                "max:3"
            ],
        ];
    }
}
