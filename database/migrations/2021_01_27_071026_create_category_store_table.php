<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_store', function (Blueprint $table) {
            $table->primary(['category_id','store_id']);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('store_id');
            $table->timestamps();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
            $table->foreign('store_id')
                  ->references('id')
                  ->on('stores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_store');
    }
}
