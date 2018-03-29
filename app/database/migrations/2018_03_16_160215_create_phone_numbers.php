<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneNumbers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone_numbers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('countryCode',4);
			$table->char('areaCode',3);
			$table->char('prefix',3);
			$table->char('suffix',4);
			$table->unsignedBigInteger('userId');
			$table->boolean('isPrimary');
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
		Schema::drop('phone_numbers');
	}

}
