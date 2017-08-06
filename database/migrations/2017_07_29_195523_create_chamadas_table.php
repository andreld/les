<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100)->nullable();
            $table->string('url',1000);
            $table->text('descr')->nullable();
            $table->date('prazo_inscr')->nullable();
            $table->integer('site_id')->unsigned();
            $table->timestamps();

            $table->foreign('site_id')->references('id')->on('sites')
                ->onUpdate('cascade')
                ->onDelete('cascade'); //Se site for deletado, as chamadas dele também serão
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamadas');
    }
}
