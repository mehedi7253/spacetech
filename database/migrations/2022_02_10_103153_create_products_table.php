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
            $table->id();
            $table->bigInteger('service_id')->unsigned();
            $table->string('model_no');
            $table->string('colum_one');
            $table->string('colum_tow');
            $table->string('colum_three')->nullable();
            $table->string('colum_four')->nullable();
            $table->string('colum_five')->nullable();
            $table->string('colum_six')->nullable();
            $table->string('image');
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('product_services')->onUpdate('cascade')->onDelete('cascade');
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
