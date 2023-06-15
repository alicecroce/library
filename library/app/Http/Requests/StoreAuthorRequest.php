<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'birth' => 'date',
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'E richiesto il nome dell autore',
            'surname.required' => 'Inserisci il cognome dell autore',
            'birth.date'=>'E richiesta una data di nascita'
        ];
    }
}
