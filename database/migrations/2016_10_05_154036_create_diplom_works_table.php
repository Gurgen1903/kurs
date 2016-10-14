<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplom_works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diplom_name');
            $table->string('diplom_description');
            $table->text('diplom_fullText');

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
        Schema::drop('diplom_works');
    }
}
