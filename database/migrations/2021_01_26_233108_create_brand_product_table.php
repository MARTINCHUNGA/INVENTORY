<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_product', function (Blueprint $table) {
            $table->primary(['brand_id','product_id']);
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();
            $table->foreign('brand_id')
                  ->references('id')
                  ->on('brands');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_product');
    }
}
