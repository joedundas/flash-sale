<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::dropIfExists('users');
		Schema::create('users',function(Blueprint $table) {
			$table->increments('id');
            $table->char('firstName',40);
            $table->char('lastName',40);
			$table->string('email')->unique();
			$table->string('password')->nullable();
			$table->char('accountType',10);
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
