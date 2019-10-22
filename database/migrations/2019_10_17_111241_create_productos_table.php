<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned()->index();
            $table->bigInteger('marca_id')->unsigned()->index();
            $table->string('nombre');
            $table->string('url');
            $table->string('descripcion');
            $table->decimal('precio')->default(0);
            $table->text('contenido')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('marca_id')->references('id')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
