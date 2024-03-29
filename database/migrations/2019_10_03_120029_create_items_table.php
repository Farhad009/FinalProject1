<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('category_id'); //this line is changed
        $table->string('name');
        $table->text('description');
        $table->integer('price');
        $table->string('image');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
