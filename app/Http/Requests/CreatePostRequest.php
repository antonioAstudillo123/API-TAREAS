<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'company_id' => ['required' , 'integer'] ,
            'name' => ['required' , 'string'] ,
            'description' => ['required' , 'string'] ,
            'user_id' => ['required' , 'integer'],
        ];
    }


    public function messages(): array{
        return [
            'company_id.required' => 'El campo company_id es obligatorio',
            'company_id.integer' => 'El campo company_id debe ser númerico',
            'name.required' => 'El campo name debe ser obligatorio',
            'name.string' => 'El campo name debe ser un string',
            'description.required' => 'El campo description debe ser obligatorio',
            'description.string' => 'El campo description debe ser un string',
            'user_id.required' => 'El campo user_id debe ser obligatorio',
            'user_id.integer' => 'El campo user_id debe ser númerico',
        ];
    }
}
