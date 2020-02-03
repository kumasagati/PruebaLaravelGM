<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicinePost extends FormRequest
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
            "med_name" => "required|max:100|unique:medicines,med_name",
            "med_pharmaceutical_form" => "required",
            "med_image" => "required|image|dimensions:min_width=635,min_height=595,max_width=645,max_height=605",
            "med_actives_components" => "required|max:100",
            "categories_cat_id" => "required",
            "med_description" => "required",
            "med_indications" => "required"
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
            "med_name.required" => "El campo <b>Nombre de Medicamento</b> es obligatorio.",
            "med_pharmaceutical_form.required" => "El campo <b>Forma Farmaceutica</b> es obligatorio.",
            "med_actives_components.required" => "El campo <b>Principios Activos</b> es obligatorio.",
            "categories_cat_id.required" => "Debe asignar una <b>Categoria</b> al medicamento.",
            "med_description.required" => "El campo <b>Descripcion</b> es obligatorio.",
            "med_indications.required" => "El campo <b>Indicaciones</b> es obligatorio.",
            "med_name.max" => "El campo <b>Nombre de Medicamento</b> puede tener maximo <b>100</b> caracteres.",
            "med_actives_components.max" => "El campo <b>Principios Activos</b> puede tener un maximo de <b>100</b> caracteres.",
            "med_image.image" => "El campo <b>Imagen</b> solo puede contener imagenes.",
            "med_image.required" => "La <b>imagen</b> es obligatoria.",
            "med_name.unique" => "Ya existe un medicamento con el nombre ingresado.",
            "med_image.dimensions" => "La imagen debe tener una resolucion de 640x600"
        ];
    }
}
