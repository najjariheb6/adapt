<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_ref');
            $table->float('product_price');
            $table->integer('quantity');
            $table->float('subtotal');
            $table->integer('tva');
            $table->float('timbre');
            $table->float('net_a_payer');
            $table->float('discount');
            $table->float('diagnostic');
            $table->integer('tickets_id')->unsigned();
            $table->foreign('tickets_id')->references('id')->on('tickets');
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
        Schema::dropIfExists('interventions');
    }
}
