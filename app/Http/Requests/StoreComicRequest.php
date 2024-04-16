<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
            'thumb' => 'nullable|max:1000',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:255',
            'artists' => 'required|max:700',
            'writers' => 'required|max:700'

        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => 'Puoi inserire massimo :max caratteri',
            'thumb.max' => "L'src può avere massimo :max caratteri",
            'description.required' => 'La descrizione deve essere inserita',
            'description.max' => 'Puoi inserire massimo :max caratteri',
            'price.required' => 'Il prezzo deve essere inserito',
            'price.max' => 'Puoi inserire massimo :max caratteri',
            'series.required' => 'La serie deve essere inserito',
            'series.max' => 'Puoi inserire massimo :max caratteri',
            'sale_date.required' => 'La data di pubblicazione deve essere inserita',
            'sale_date.max' => 'Puoi inserire massimo :max caratteri',
            'type.required' => 'La tipologia del fumetto deve essere inserita',
            'type.max' => 'Puoi inserire massimo :max caratteri',
            'artists.required' => "L'artista deve essere inserita",
            'artists.max' => 'Puoi inserire massimo :max caratteri',
            'writers.required' => 'Lo scrittore deve essere inserito',
            'writers.max' => 'Puoi inserire massimo :max caratteri'
        ];
    }
}
