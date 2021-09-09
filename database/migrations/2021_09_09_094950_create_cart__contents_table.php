<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart__contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_propertie_id')->references('id')->on('product_properties');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('amount');
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart__contents');
    }
}
