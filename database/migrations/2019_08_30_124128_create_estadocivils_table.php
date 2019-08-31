<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadocivilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadocivils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->timestamps();
        });

        DB::table('estadocivils')->insert(array(
          'estado' => 'Soltero',
        ));
        DB::table('estadocivils')->insert(array(
          'estado' => 'Casado',
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadocivils');
    }
}
