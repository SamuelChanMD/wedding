<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Note: Kid needs validation that the parents have been invited. Not need invitor
     * Note: People not in list need valid invitor
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
            $table->string('parentFirstName')->nullable();
            $table->string('parentLastName')->nullable();
            $table->integer('invitationMax')->default(0);
            $table->integer('invitationCount')->default(0);
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
  
