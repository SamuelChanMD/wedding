<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->boolean('attending')->nullable($value = true);
            $table->string('email', 50)->nullable();
            $table->boolean('isKid')->default(false)->nullable();
            $table->string('invitorFirstName')->nullable();
            $table->string('invitorLastName')->nullable();
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
        Schema::dropIfExists('guests');
    }
}
  
