<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'location' => 'required|string',
            'category_id' => 'required|exists:job_categories,id',
            'job_status' => 'required|exists:jobs_status,id',
            'job_type' => 'required|exists:job_type,id',
            'responsibilities' => 'required|string',
            'salary' => 'required|numeric',
            'benefits' => 'required|string',
            'deadline' => 'required|date',
            'logo' => 'nullable|string',
        ];
    }
}