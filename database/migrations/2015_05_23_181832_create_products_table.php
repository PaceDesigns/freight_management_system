<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('consignee');
			$table->string('HAWB');
			$table->string('product_type');
			$table->string('product_description');
			$table->integer('quantity')->unsigned();
			$table->integer('gross_weight');
			$table->string('destination');
			$table->string('destination_address');
			$table->integer('courier_id');
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
		Schema::drop('products');
	}

}
