<?php

namespace App\Http\Requests\Admin\Compra;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCompra extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.compra.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orden_compra' => ['required', 'integer'],
            'servicio_solicitado' => ['required', 'string'],
            'etapa_venta' => ['required', 'string'],
            'tipo_servicio' => ['required', 'string'],
            'fecha_solicitud' => ['required', 'date'],
            'fecha_compromiso' => ['required', 'date'],
            'monto' => ['required', 'numeric'],
            
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
