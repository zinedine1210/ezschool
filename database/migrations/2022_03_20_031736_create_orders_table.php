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
            $table->id();
            $table->string("key_order")->unique();
            $table->string("nama");
            $table->bigInteger("phone");
            $table->bigInteger("shippingprice");
            $table->enum("paymentmethod", ['cardpayment', 'takeatplace']);
            $table->bigInteger("total");
            $table->string("time")->default(date("d M Y"));
            $table->foreignId("address_id");
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
        Schema::dropIfExists('orders');
    }
}
