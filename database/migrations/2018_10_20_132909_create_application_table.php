<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration {

	/**
	 * Run the migrations. // Tạo bảng application
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Application', function (Blueprint $table) {

			$table->integer('IdCategory')->unsigned();
			$table->foreign('IdCategory')->references('IdCategory')->on('Category');

			$table->integer('IdType')->unsigned();
			$table->foreign('IdType')->references('IdType')->on('Types');


			$table->increments('IdApplication');

			$table->string('NameApp', 30);
			$table->string('Developer', 25);
			$table->string('Description');

			$table->string('Icon', 150);
			$table->string('Image1', 200);
			$table->string('Image2', 200);
			$table->string('Image3', 200);

			$table->string('LinkDownload');
			$table->integer('NumberDownload');

			$table->float('Version', 8, 2);
			$table->float('Size', 8, 2);
			$table->string('SortDescription');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Application');
	}

}
