<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Companies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    if(!Schema::hasTable('companies')) {
            Schema::create('companies', function (Blueprint $table) {
                $table->increments('id');
                $table->text('companyName');
                $table->timestamps();

            });
        }

        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('companyId');
        });

        Schema::table('phone_numbers', function (Blueprint $table) {
            $table->unsignedBigInteger('companyId');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');


        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('userId');
            $table->dropColumn('companyId');
        });

        Schema::table('phone_numbers', function (Blueprint $table) {
            $table->dropColumn('companyId');
        });
	}

}
