<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductFamilyMin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //$table->unsignedBigInteger('family_min_id');
            //$table->foreign('family_min_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('sku')->references('product_sku')->on('family_mins')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['sku']);
           // $table->dropColumn('family_min_id');
        });
    }
}
