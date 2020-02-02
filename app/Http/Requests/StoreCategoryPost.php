<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryPost extends FormRequest
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
            "cat_name" => "required|max:100|unique:categories,cat_name"
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "cat_name.required" => "El campo <b>Nombre Clasificacion</b> es obligatorio.",
            "cat_name.max" => "El campo <b>Nombre Clasificacion</b> puede tener un máximo de 4 caracteres.",
            "cat_name.unique" => "Ya existe una categoria con el nombre ingresado."
        ];
    }
}
