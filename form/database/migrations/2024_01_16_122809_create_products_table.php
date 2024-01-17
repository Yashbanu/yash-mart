<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void  
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->comment("Unique ID for each product");
            $table->string('name',50)->comment("Name of the product");
            $table->string('category',10)->comment("Category of the product i.e, Hardware Or Software");
            $table->integer('price')->comment("price of the product");
            $table->integer('quantity')->comment("quantity of the product");
            $table->timestamps();
        });
    }







    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
