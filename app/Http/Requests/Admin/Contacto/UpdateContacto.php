<?php

namespace App\Http\Requests\Admin\Contacto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateContacto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.contacto.edit', $this->contacto);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => ['sometimes', 'string'],
            'empresa' => ['sometimes', 'string'],
            'correo' => ['sometimes', 'string'],
            'telefono' => ['sometimes', 'string'],
            'direccion' => ['sometimes', 'string'],
            'codigo_postal' => ['sometimes', 'integer'],
            'orden_compra' => ['sometimes', 'integer'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
