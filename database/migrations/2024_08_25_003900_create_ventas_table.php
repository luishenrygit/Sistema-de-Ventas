<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('VentaID');
            $table->date('fecha_venta');
            $table->unsignedBigInteger('ProductoID');
            $table->string('nombre_cliente');
            $table->decimal('costo_total', 8, 2);
            $table->decimal('precio_unitario', 8, 2);
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('ProductoID')->references('ProductoID')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
