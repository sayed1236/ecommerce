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
 $table->increments('id');
    $table->string('name');
    $table->integer('discount');
   
    $table->string('photo')->nullable();
    $table->integer('price');
    $table->string('offer')->nullable();
    $table->integer('category_id')->unsigned();
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    $table->integer('detail_id')->unsigned();
    $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');

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
