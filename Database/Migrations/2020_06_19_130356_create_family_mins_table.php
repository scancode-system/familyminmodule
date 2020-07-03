<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_mins', function (Blueprint $table) {
            $table->bigIncrements('id');

            //$table->integer('product_sku')->unsigned()->unique(); 

            $table->string('product_sku')->unique();
            //$table->foreign('product_sku')->references('sku')->on('products')->onDelete('no action')->onUpdate('no action');

            //$table->unsignedBigInteger('product_id');
            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('min_qty')->default(1);

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
        Schema::dropIfExists('family_mins');
    }
}
