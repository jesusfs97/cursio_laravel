<?php
use App\Categoria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('titulo');
            $table->string('descripcion');
            $table->timestamps();
        });

        Categoria::create([
            'url' => 'ice-cream',
            'titulo' => 'Ice Cream',
            'descripcion' => 'Ice cream products'
        ]);

        Categoria::create([
            'url' => 'meat',
            'titulo' => 'Meat',
            'descripcion' => 'Food that contain meat'
        ]);

        Categoria::create([
            'url' => 'junk-food',
            'titulo' => 'Junk Food',
            'descripcion' => 'Foods that you should eat before they are banned by the Government'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
