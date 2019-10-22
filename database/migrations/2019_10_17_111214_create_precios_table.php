<?php
use App\Precio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('titulo');
            $table->string('descripcion');
            $table->decimal('porcentaje');
            $table->timestamps();
        });

        Precio::create([
            'url' => 'summer',
            'titulo' => 'Summer',
            'descripcion' => 'Summer discounts',
            'porcentaje' => 10,
        ]);

        Precio::create([
            'url' => 'tuesday',
            'titulo' => 'Tuesday',
            'descripcion' => 'Special tuesday discounts',
            'porcentaje' => 7,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precios');
    }
}
