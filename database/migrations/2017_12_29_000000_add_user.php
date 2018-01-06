<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
        	array(
        		'name' => 'admin',
        		'email' => 'samuelchanmd@gmail.com',
        		'password' => password_hash('wedding$2018!', PASSWORD_BCRYPT, [ 'cost' => 10])
        	)
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Need to implement deletion of record, when I feel like it
    }
}
