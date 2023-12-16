<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRouteRequest extends FormRequest
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
            'passport_no' => 'string|required|exists:users,passport_no',
        ];
    }
}
