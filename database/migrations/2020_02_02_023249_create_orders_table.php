<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            // $table->timestamps('order_verified_at');
            $table->string('customer_name');
            $table->text('customer_address');
            $table->text('customer_email');
            $table->string('customer_phone_number');
            $table->string('list_of_items');
            $table->integer('shipping_cost');
            $table->integer('product_cost');
            $table->integer('total_cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
