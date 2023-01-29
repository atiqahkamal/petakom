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
        Schema::create('activities', function (Blueprint $table) {
            $table->id('ActivityID');
            $table->string('activity_title', 255);
            $table->date('activity_dateStart');
            $table->date('activity_dateEnd');
            $table->time('activity_timeStart');
            $table->time('activity_timeEnd');
            $table->string('activity_location', 255);
            $table->string('activity_participation', 100);
            $table->string('activity_description', 255);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
