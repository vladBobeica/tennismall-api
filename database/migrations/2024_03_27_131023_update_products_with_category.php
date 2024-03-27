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
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->unsignedBigInteger('category_id'); // Define category_id as FK

            $table->foreign('category_id') // Define foreign key constraint
                ->references('id')
                ->on('categories')
                ->onDelete('CASCADE'); // Define onDelete behavior as CASCADE or SET NULL as needed

            $table->string('description');
            $table->string('image');
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
