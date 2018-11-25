<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3', 
            'description' => 'required|min:5'
        ];
    }

     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'Ce champ est requis',
            'min' => 'La valeur minimale :min est requise',
            'title.min' => 'Vous devez entrer un titre de minimum 3 caractères',
            'title.required' => 'Le titre est requis pour retrouver cet évènement',
            'description.required' => 'Vous devez entrer une description'
        ];
    }
}
