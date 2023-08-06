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
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->string('describtion');

            $table->enum('size', ['xs', 's','m','l','xl'])->nullable();
            
          
            $table->timestamps();
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
// $table->increments('id');
// $table->string('describtion');
// $table->integer('product_id')->unsigned();
// $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
// $table->timestamps();