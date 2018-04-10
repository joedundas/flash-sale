<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedBigInteger('companyId');
			$table->unsignedBigInteger('userId');
			$table->unsignedInteger('roleId');
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
		Schema::drop('company_roles');
	}

}
