<?php

namespace App\Http\Requests\Api\Task;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
<<<<<<< HEAD
    public function rules():array
    {
        return [
            "name" => "required",
            "description" => "required",
        ];
    }

    public function messages():array
    {
        return[
            'name.require' =>'Hay nhap name'
=======
    public function rules()
    {
        return [
            "name" => ['required', 'max:255'],
            "description" => "required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'hãy nhập name'
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
        ];
    }
}
