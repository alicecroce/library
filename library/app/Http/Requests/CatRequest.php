<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string|max:60',
        ];
    }

    public function messages():array{
        return[
            'name.required'=>'Inserire un nome valido',
            'name.string'=>'Il nome deve contenere caratteri alfanumerici',
            'name.max:60'=>'La categoria che stai inserendo ha un nome troppo lungo',
        ];
    }
}
