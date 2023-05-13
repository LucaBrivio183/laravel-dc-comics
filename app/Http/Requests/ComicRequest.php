<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
    public function messages()
    {

        return [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'Il titolo può avere massimo 50 caratteri',
            'description.required' => 'Campo è obbligatorio',
            'thumb.required' => "Campo obbligatorio",
            'thumb.url' => "L'URL inserito non è valido",
            'price.required' => 'Campo è obbligatorio',
            'series.required' => 'Campo è obbligatorio',
            'sale_date.required' => 'Campo obbligatorio',
            'sale_date.date' => 'Inserire una data valida',
            'artists.required' => 'Campo obbligatorio',
            'writers.required' => 'Campo obbligatorio',
        ];
    }
}
