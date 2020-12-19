<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idcuenta');
            $table->datetime('fechamov');
            $table->char('tipo',1);
            $table->decimal('cantidad', $precision = 8, $scale = 2);
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->foreign('idcuenta')->references('id')->on('cuentas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
