<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'thumb' => 'required|url',
            'type' => 'required',
            'sale_date' => 'required|date',
            'writers' => 'required',
            'artists' => 'required',
            'series' => 'required',
            'price' => 'required|decimal:2',
            'description' => 'required'

        ];
    }

//Errori in italiano per il bonus
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere di almeno 3 caratteri',
            'title max' => 'Il titolo non può essere più lungo di 255 caratteri',
            'thumb.required' => 'Un URL è obbligatorio',
            'thumb.url' => 'URL non corretto, riprovare',
            'sale_date.required' => 'La data di messa in vendita è obbligatoria',
            'sale_date.date' => 'La data è errata, controllare il formato',
            'writers.required' => 'Almeno un autore è obbligatorio',
            'series.required' => 'La serie a cui il fumetto appartiene è un campo obbligatorio',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.decimal' => 'Prezzo nel formato errato, inserire una cifra con due decimali',
            'description.required' => 'La descrizione del fumetto è obbligatoria',
        ];
    }
}
