<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('compagnia', 50);
            $table->decimal('prezzo', 9, 2);
            $table->smallInteger('giorni')->unsigned();
            $table->smallInteger('notti')->unsigned();
            $table->tinyInteger('disponibilità')->default(1);
            $table->date('data_partenza');
            $table->date('data_ritorno');
            $table->string('alloggio', 25);
            $table->tinyInteger('colazione')->default(1);
            $table->text('description')->nullable($value = true);
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
        Schema::dropIfExists('packages');
    }
}
