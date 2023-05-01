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
        Schema::create('diemdanh', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_lichday');
            $table->foreign('id_lichday')->references('id')->on('lichday');
            $table->string('rollno');
            $table->foreign('rollno')->references('rollno')->on('sinhvien');
            $table->tinyInteger('status'); //0 vắng  1 đi học 
            $table->string('note');
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
        Schema::dropIfExists('diemdanh');
    }
};
