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
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('category_id') // Foreign key column
                  ->constrained('categories') // References 'id' on 'categories' table
                  ->onDelete('cascade'); // Deletes products if the parent category is deleted
            $table->foreignId('sub_category_id') // Foreign key column
                ->constrained('sub_categories') // References 'id' on 'subcategories' table
                ->onDelete('cascade'); // Deletes products if the parent subcategory is deleted
            $table->string('name'); // Name of the subcategory
            $table->text('description')->nullable();
            $table->string('image_url'); // Product image URL
            $table->unique(['category_id', 'sub_category_id', 'name']); // Unique constraint on category_id, subcategory_id and name
            $table->timestamps(); // Created_at and updated_at columns
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
