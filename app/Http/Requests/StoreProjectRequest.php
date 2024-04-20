<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' =>'required|max:5000',
            'project_image' => 'required|max:5000',
            'used_technologies' => 'required|max:255',
            'project_date' => 'required|date',
            'link_github' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo :attribute deve essere inserito',
            'project_date.date' => 'La data di presentazione deve essere valida',
            'max' => 'Il campo :attribute deve essere :max caratteri',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'description' => 'descrizione',
            'project_image' => 'immagine progetto',
            'used_technologies' => 'tecnologie usate',
            'project_date' => 'data di consegna',
            'link_github' => 'link_github',
        ];
    }
}
