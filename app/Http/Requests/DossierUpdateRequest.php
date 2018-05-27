<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DossierUpdateRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            'numero_ordre' => 'required|max:10|unique:dossiers_correctionnels'.$id,
            'date_premiere_audience' => 'required|date'.$id,
            'partie_civile' => 'required|max:255|'.$id,
            'prevenu' => 'required|max:255'.$id,
            'situation_penale' => 'required|max:255'.$id,
            'jugment_ADD' => 'required|max:255'.$id,
            'jugement_au_fond' => 'required|max:255'.$id
            //
        ];
    }
}
