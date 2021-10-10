<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("carts_id")
            ->constrained("carts")
            ->onDelete("restrict")
            ->onUpdate("restrict");
            $table->foreignId("method")
            ->constrained("method")
            ->onDelete("restrict")
            ->onUpdate("restrict");
            $table->datetime("payment_deadline");
            $table->foreignId("courier_id")
            ->constrained("courier")
            ->onDelete("restrict")
            ->onUpdate("restrict");
            $table->integer("total_payments");
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
        Schema::dropIfExists('transaction');
    }
}
