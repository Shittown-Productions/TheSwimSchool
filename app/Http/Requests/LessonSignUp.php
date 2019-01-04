<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class LessonSignUp extends FormRequest
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
            'firstName' => 'required|string|max:191',
            'lastName' => 'required|string|max:191',
            'birthDate' => 'required|date|before:today',
            'email' => 'required|string|email|max:191',
            'phone' => 'required|max:20',
            'parent' => 'nullable|max:191',
            'street' => 'required|max:191',
            'city' => 'required|max:191',
            'state' => 'required|max:191',
            'zip' => 'required|max:15',
            'emergencyName' => 'required|max:191',
            'emergencyRelationship' => 'required|max:191',
            'emergencyPhone' => 'required|max:20',
            'lesson_id' => 'required|integer',
            'stripeToken' => 'required',
            'emailUpdates' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'lesson_id.required' => "The lesson seems to be missing. Refresh the page and try that again.",
            'stripeToken.required' => "Something went wrong with stripe try that again."
        ];
    }
}
