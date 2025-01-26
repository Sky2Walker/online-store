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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('color_id')->nullable()->index();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');

            $table->unsignedBigInteger('size_id')->nullable()->index();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');

            $table->unsignedBigInteger('material_id')->nullable()->index();
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');


            $table->integer('quantity')->default(0);
            $table->decimal('price', '20', '2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
