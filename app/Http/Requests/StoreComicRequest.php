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
}
