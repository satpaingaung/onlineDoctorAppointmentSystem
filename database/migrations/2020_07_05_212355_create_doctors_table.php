<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctorName');
            $table->integer('phoneNumber');
            $table->string('doctorNumber');
            $table->unsignedBigInteger('department_id');
            $table->text('doctorPhoto');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('department_id')
                  ->references('id')->on('departments')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
