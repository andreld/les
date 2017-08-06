<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100)->nullable();
            $table->string('url',1000);
            $table->integer('chamada_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('chamada_id')->references('id')->on('chamadas')
                    ->onUpdate('cascade')->onDelete('cascade');
            
        });
        //Schema::dropIfExists('editals');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editais');
    }
}
