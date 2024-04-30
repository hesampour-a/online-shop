<?php

use App\Models\Category;
use App\Models\ProductBrand;
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
            $table->string('fa_title');
            $table->text('description');
            $table->text('long_description');
            $table->string('garanty');
            $table->text('colors')->nullable();
            $table->text('sizes')->nullable();
            $table->unsignedBigInteger('price');
            $table->unsignedInteger('count');
            $table->foreignIdFor(Category::class)->nullable()->constrained;
            $table->foreignIdFor(ProductBrand::class)->nullable()->constrained;
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
