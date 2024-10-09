<?php

namespace App\Http\Requests\Api\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['sometimes', 'required', 'max:255'],
            "description" => "nullable|string"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'hãy nhập name'
        ];
    }
}
