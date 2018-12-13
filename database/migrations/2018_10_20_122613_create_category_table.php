<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.  Tao bang category
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Category', function (Blueprint $table) {
			$table->increments('IdCategory');
			$table->string('NameCategory', 50);


		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Category');
	}

}
