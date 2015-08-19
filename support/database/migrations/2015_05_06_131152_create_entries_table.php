<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function($table)
		{
		    $table->increments('id');
		    $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->text('info')->nullable();
            $table->integer('level')->unsigned()->default(0);
            $table->integer('state_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('project_id')->unsigned();

            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('project_id')->references('id')->on('projects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entries');
	}

}
