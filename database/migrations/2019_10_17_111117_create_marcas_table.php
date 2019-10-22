<?php
use App\Marca;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('titulo');
            $table->string('descripcion');
            $table->timestamps();
        });
        Marca::create([
            'url' => 'kfc',
            'titulo' => 'KFC',
            'descripcion' => 'Foods Kentucky Fried Chicken'
        ]);

        Marca::create([
            'url' => 'hungry-lion',
            'titulo' => 'Hungry Lion',
            'descripcion' => 'Foods by hungry lion'
        ]);

        Marca::create([
            'url' => 'mcdonald',
            'titulo' => 'McDonald',
            'descripcion' => 'Foods by McDonald'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
