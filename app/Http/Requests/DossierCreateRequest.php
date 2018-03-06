<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DossierCreateRequest extends FormRequest
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
            'numero_ordre' => 'required|max:10|unique:dossiers_correctionnels',
            'date_premiere_audience' => 'required|date',
            'partie_civile' => 'required|max:255|',
            'prevenu' => 'required|max:255',
            'situation_penale' => 'required|max:255',
            'jugment_ADD' => 'required|max:255',
            'jugement_au_fond' => 'required|max:255'
            //
        ];
    }
}
