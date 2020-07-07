<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('doctor_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('day_id')
                  ->references('id')->on('weekdays')
                  ->onDelete('cascade');

            $table->foreign('period_id')
                  ->references('id')->on('periods')
                  ->onDelete('cascade');

            $table->foreign('doctor_id')
                  ->references('id')->on('doctors')
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
        Schema::dropIfExists('schedules');
    }
}
