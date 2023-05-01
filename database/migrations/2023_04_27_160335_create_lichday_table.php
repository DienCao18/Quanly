<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichday', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->string('subject_name');
            $table->string('teacher_name');
            $table->tinyInteger('frametime');
            $table->float('starttime',8,2);
            $table->float('endtime',8,2);
            $table->date('startdate');
            $table->date('enddate');
            $table->string('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichday');
    }
};
