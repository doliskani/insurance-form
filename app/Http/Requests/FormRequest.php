<?php

namespace App\Http\Requests;

use App\Models\Consumer;
use Illuminate\Foundation\Http\FormRequest as HttpFormRequest;
use Illuminate\Validation\Rule;

class FormRequest extends HttpFormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "email" => "required_without:phone|email|max:255",
            "phone" => "required_without:email",
            "contact_preference" => ["required" , Rule::in(Consumer::CONTACT_PREFERENCE)],
            "street" => "required|string|max:255",
            "apartment" => "required|integer",
            "city" => "required|string|max:255",
            "state" => "required|string|max:255",
            "zipcode"  => "required|string|max:255",

            "agreement" => "required|boolean",
            "home_insurance" => "required|boolean",
            "auto_insurance" => "required|boolean",
            "recreational_vehicle_insurance" => "required|boolean"
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'The phone number is required.',
            'phone.phone' => 'The phone number format is invalid.',
        ];
    }

    public function consumerData(): array
    {
        return [
            "first_name",
            "last_name",
            "email",
            "phone",
            "contact_preference",
            "street",
            "apartment",
            "city",
            "state",
            "zipcode" ,
        ];
    }

    public function submissionData(): array
    {
        return [
            "agreement",
            "home_insurance",
            "auto_insurance",
            "recreational_vehicle_insurance"
        ];
    }


    
}
