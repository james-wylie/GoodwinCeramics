<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('owner_id');


            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->integer('height');
            $table->integer('width');
            $table->string('imageOne');
            $table->string('imageTwo');
            $table->integer('price');
            $table->string('color');
            $table->text('sold');

            // $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
