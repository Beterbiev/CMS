<?php

namespace App\Http\Requests\Admin\Compra;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCompra extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.compra.edit', $this->compra);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orden_compra' => ['sometimes', 'integer'],
            'servicio_solicitado' => ['sometimes', 'string'],
            'etapa_venta' => ['sometimes', 'string'],
            'tipo_servicio' => ['sometimes', 'string'],
            'fecha_solicitud' => ['sometimes', 'date'],
            'fecha_compromiso' => ['sometimes', 'date'],
            'monto' => ['sometimes', 'numeric'],
            
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
