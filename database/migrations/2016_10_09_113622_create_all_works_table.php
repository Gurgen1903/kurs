<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('works_name');
            $table->string('display_name');
            $table->string('works_object');
            $table->string('user_name');
            $table->integer('user_id');

            $table->timestamps();
        });
        Schema::table('all_works', function (Blueprint $table) {
            $table->string('work_category');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('all_works');
    }
}
