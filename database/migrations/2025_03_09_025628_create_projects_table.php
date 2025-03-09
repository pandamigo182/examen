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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto');
            $table->string('fuente_fondos');
            $table->decimal('monto_planificado', 10, 2);
            $table->decimal('monto_patrocinado', 10, 2);
            $table->decimal('monto_fondos_propios', 10, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('project_manager');
            $table->string('department');
            $table->string('status');
            $table->text('description');
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
        Schema::dropIfExists('projects');
    }
};
