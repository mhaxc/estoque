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
            $table->string('name', 45);
            $table->Double('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('color', 45)->nullable();
            $table->Double('quantity')->default(0);
            $table->Double('height')->default(0);
            $table->Double('width')->default(0);
            $table->Double('depth')->default(0);
            $table->Double('weight')->default(0);
            $table->string('img')->nullable();
            $table->boolean('active')->nullable();
            $table->unsignedInteger('category_id');
            $table->string('bulk_slug', 2);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('bulk_slug')->references('slug')->on('bulks');
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
