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
            $table->id();
            $table->string("judul");
            $table->string("key_product")->unique();
            $table->integer("harga");
            $table->enum("kondisi", ["baru", "bekas"]);
            $table->integer("berat")->nullable();
            $table->integer("diskon")->nullable();
            $table->integer("stock");
            $table->text("deskripsi");
            $table->text("informasi")->nullable();
            $table->foreignId("kategory_id");
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
        Schema::dropIfExists('products');
    }
}
