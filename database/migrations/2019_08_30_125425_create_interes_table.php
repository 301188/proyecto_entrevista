<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nivel');
            $table->timestamps();
        });

        DB::table('interes')->insert(array(
          'nivel' => 'Preparatoria',
        ));
        DB::table('interes')->insert(array(
          'nivel' => 'Licenciatura',
        ));
        DB::table('interes')->insert(array(
          'nivel' => 'Posgrado',
        ));
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interes');
    }
}
