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
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->unsignedBigInteger('categorie_id');

            $table->foreign('categorie_id')            // Define the foreign key
              ->references('id')                // Reference the `id` column
              ->on('categories')              // In the `parent_table`
              ->onDelete('cascade')           // Cascade on delete (optional)
              ->onUpdate('cascade');           // Cascade on delete (optional)
              
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
