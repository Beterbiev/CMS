<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->integer('orden_compra');
            $table->string('servicio_solicitado',80);
            $table->string('etapa_venta',80); //prospeccion, contactado, aceptada, enviada propuesta, negociacion
            $table->string('tipo_servicio',30);
            $table->date('fecha_solicitud');
            $table->date('fecha_compromiso');
            $table->decimal('monto', 9, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
