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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('category_id') // Foreign key column
                  ->constrained('categories') // References 'id' on 'categories' table
                  ->onDelete('cascade'); // Deletes subcategories if the parent category is deleted
            $table->string('name'); // Name of the subcategory
            $table->text('description')->nullable();
            $table->unique(['category_id', 'name']); // Unique constraint on description and category_id
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
