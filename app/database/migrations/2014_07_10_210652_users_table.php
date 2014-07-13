<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
		    $table->increments('id');
		    $table->string('username', 60)->unique();
		    $table->string('password', 60);
		    $table->timestamps();
		    $table->string('remember_token', 100)->nullable();
		    $table->string('house', 20)->unique();
		    $table->tinyInteger('tokens');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
