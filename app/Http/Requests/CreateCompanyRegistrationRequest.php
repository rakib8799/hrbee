<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRegistrationRequest extends FormRequest
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
            'subscription_plan_id' => 'required',
            'workspace' => ['required', 'regex:/^[A-Za-z0-9][A-Za-z0-9_]*$/', 'not_in:hrbee,admin,dev'],
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            'terms_conditions' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'subscription_plan_id.required' => 'The subscription plan is required.',
            'workspace.required' => 'The workspace field is required.',
            'workspace.regex' => 'The workspace field may only contain letters, numbers, and underscores',
            'workspace.not_in' => 'The worksapce is already in use',
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password_confirmation.required' => 'The password confirmation field is required.',
            'terms_conditions.required' => 'You must agree to the Terms and Conditions.'
        ];
    }
}
