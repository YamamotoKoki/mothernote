<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('use_id');
            $table->date('day');
            $table->text('title');
            $table->text('body');
            $table->integer('tall');
            $table->integer('weight');
            $table->time('sleeptime');
            $table->timestamps();

            //外部キー制約

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary');
    }
}
