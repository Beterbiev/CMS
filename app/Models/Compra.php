<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'orden_compra',
        'servicio_solicitado',
        'etapa_venta',
        'tipo_servicio',
        'fecha_solicitud',
        'fecha_compromiso',
        'monto',
    
    ];
    
    
    protected $dates = [
        'fecha_solicitud',
        'fecha_compromiso',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/compras/'.$this->getKey());
    }
}
