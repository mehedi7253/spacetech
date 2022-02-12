<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_designs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('desgin_id')->unsigned();
            $table->string('model_no');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
            $table->foreign('desgin_id')->references('id')->on('designs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_designs');
    }
}
