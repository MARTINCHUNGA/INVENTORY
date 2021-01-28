<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_category', function (Blueprint $table) {
            $table->primary(['brand_id','category_id']);
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
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
        Schema::dropIfExists('brand_category');
    }
}
