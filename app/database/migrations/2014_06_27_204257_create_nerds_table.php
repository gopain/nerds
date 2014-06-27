<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNerdsTable extends Migration {

	public function up(){
		Schema::create('nerds', function($table){
      $table->increments('id');
      $table->string('name', 255);
      $table->string('email', 255);
      $table->integer('nerd_level');
      $table->timestamps();
	 });
	}

	public function down(){
    Schema::drop('nerds');
	}
}

