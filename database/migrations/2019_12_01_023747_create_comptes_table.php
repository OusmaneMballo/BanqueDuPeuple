<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->timestamps();
            $table->string('numero');
            $table->decimal('solde');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_user');
            $table->date('dateCreation');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_user')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
