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
            'title' => 'required|max:150|min:5',
            'description' => 'required|max:255|min:5',
            'thumb' => 'required|max:255|min:5',
            'price' => 'required|max:10|min:1',
            'series' => 'required|max:80|min:5',
            'sale_date' => 'required|date',
            'type' => 'required|max:80|min:5'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'Caratteri massimi :max',
            'title.min' => 'Caratteri minimi :min',
            'description.required' => 'Campo obbligatorio',
            'description.min' => 'Caratteri minimi :min',
            'thumb.required' => 'Campo obbligatorio',
            'thumb.max' => 'Caratteri massimi :max',
            'thumb.min' => 'Caratteri minimi :min',
            'price.required' => 'Campo obbligatorio',
            'price.max' => 'Caratteri massimi :max',
            'price.min' => 'Caratteri minimi :min',
            'sale_date.required' => 'Campo obbligatorio',
            'sale_date.date' => 'Formato data YYYY/MM/DD',
            'series.required' => 'Campo obbligatorio',
            'series.max' => 'Caratteri massimi :max',
            'series.min' => 'Caratteri minimi :min',
            'type.required' => 'Campo obbligatorio',
            'type.max' => 'Caratteri massimi :max',
            'type.min' => 'Caratteri minimi :min',

        ];
    }
}
