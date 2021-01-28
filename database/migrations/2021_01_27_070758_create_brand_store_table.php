<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_store', function (Blueprint $table) {
            $table->primary(['brand_id','store_id']);
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('store_id');
            $table->timestamps();
            $table->foreign('store_id')
                  ->references('id')
                  ->on('stores');
            $table->foreign('brand_id')
                  ->references('id')
                  ->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_store');
    }
}
