<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideographyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'videography_plan_id' => ['required'],
            'name_customer' => ['required', 'string', 'max:191'],
            'number_customer' => ['required', 'numeric', 'regex:/^(\+62|62|0*)[2-9]{1}[0-9]{5,11}$/'],
            'email_customer' => ['required', 'email'],
            'description' => ['nullable', 'string', 'max:191'],
        ];
    }
}
