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
            $table->bigIncrements('product_row_id');
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_height');
            $table->integer('product_width');
            $table->integer('product_weight');
            $table->integer('category_row_id');
            $table->integer('product_sku');
            $table->integer('is_featured');
            $table->integer('is_latest');
            $table->text('product_short_description');
            $table->text('product_long_description');
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
