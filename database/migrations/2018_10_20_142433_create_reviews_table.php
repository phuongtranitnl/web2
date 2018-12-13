<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('Reviews', function (Blueprint $table) {

			$table->integer('IdApplication')->unsigned();
			$table->foreign('IdApplication')->references('IdApplication')->on('Application');

			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('Users');

			$table->date('ReviewDate');

			$table->string('ContentReview', 100);




		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Reviews');
	}

}
