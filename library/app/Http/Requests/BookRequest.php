<?php
//generato con il comando php artisan make:request

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest //LA CLASSE (a fine processo) VA INIETTATA NEL METODO STORE (all'interno del controllers)
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //va settato su true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [ // questa funge da VALIDAZIONE
            'author_id' => 'required',
            'title' => 'required|string',
            'pages' => 'numeric',
            'year' => 'required|numeric',
            'image' => 'mimes:bmp,png,jpeg, jpg',
        ];
    }

    public function messages(): array //questo metodo gestisce l'errore che compare quando la digitazione non è corretta
    {
        return [ //ricorda che devi inserire un messaggio per ogni caratteristica che vuoi assegnare
            'author_id.required' => 'L autore è richiesto',
            'author_id.string' => 'Sono richiesti caratteri alfanumerici',
            'title.required' => 'E richiesto un titolo',
            'title.string' => 'Sono richiesti caratteri alfanumerici',
            'pages.numeric' => 'Sono richiesti caratteri numerici',
            'year.required' => 'E richiesto l anno di pubblicazione',
            'year.numeric' => 'Sono richiesti caratteri numerici',
            'image.mimes' => 'Inserisci l immagine nei formati richiesti',
        ];
    }
}
