<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('postcode')->nullable();
            $table->string('phone_house')->nullable();
            $table->string('addition')->nullable();
            $table->string('street')->nullable();
            $table->string('place')->nullable();
            $table->string('building')->nullable();
            $table->string('floor')->nullable();
            $table->string('room_local')->nullable();
            $table->string('cost_center')->nullable();
            $table->text('multiline')->nullable();
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
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
        Schema::dropIfExists('forms');
    }
}
