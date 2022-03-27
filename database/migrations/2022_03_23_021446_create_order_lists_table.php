<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->integer("harga");
            $table->bigInteger("total");
            $table->integer("jumlah");
            $table->string("key_order")->nullable();
            $table->foreignId("order_id")->nullable();
            $table->enum("status", ['cart', 'checkout']);
            $table->string("note")->nullable();
            $table->foreignId("detailproduct_id")->nullable();
            $table->foreignId("product_id");
            $table->foreignId("user_id");
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
        Schema::dropIfExists('order_lists');
    }
}
