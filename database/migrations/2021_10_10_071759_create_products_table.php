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
            $table->bigIncrements("id");
            $table->foreignId("category_id")
            ->constrained("categoriest")
            ->onDelete("restrict")
            ->onUpdate("restrict");
            $table->string("product_name");
            $table->integer("produk_price");
            $table->integer("product_stock");
            $table->text("description");
            $table->integer("total_sold");
            $table->integer("total_review");
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
