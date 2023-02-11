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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreignId('application_user_id');
            $table->datetime('application_datetime');
            $table->enum('status', ['Waiting For Approval', 'Approved', 'Cancelled', 'in Use', 'Completed']);
            $table->foreignId('destination');
            $table->string('description');
            $table->foreignId('approval_superior_id')->nullable();
            $table->foreignId('approval_head_id')->nullable();
            $table->foreignId('decline_user_id')->nullable();
            $table->foreignId('driver_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('return_date')->nullable();
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
        Schema::dropIfExists('rentals');
    }
};
