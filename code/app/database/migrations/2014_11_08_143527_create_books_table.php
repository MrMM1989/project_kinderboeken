<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('fk_user')->unsigned();
            $table->foreign('fk_user')
                  ->references('id')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('fk_avi')->unsigned();
            $table->foreign('fk_avi')
                  ->references('id')->on('avis')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('title', 50);
            $table->string('author', 50);
            $table->string('publisher', 50)->nullable();
            $table->string('about')->nullable();
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
		Schema::drop('books');
	}

}
