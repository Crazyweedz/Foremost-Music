<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'nom' => 'bail|required|alpha',
            'email' => 'bail|required|email',
            'telephone' => 'bail|required|numeric',
            'artiste' => 'bail|required',
            'budget' => 'bail|required|numeric',
            'nombre' => 'bail|numeric',
            'date' => 'bail|required|date',
            'lieu' => 'bail|required',
            'ville' => 'bail|required|alpha'
        ];
    }
}
