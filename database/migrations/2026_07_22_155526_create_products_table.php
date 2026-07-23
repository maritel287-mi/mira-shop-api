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
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
        $table->string('name');
        $table->text('description')->nullable();
        $table->decimal('price', 10, 2);
        $table->string('image')->nullable();
        $table->enum('type', ['product', 'service'])->default('product'); // 'product' pour vente (abayas, gâteaux) ou 'service' pour réservation (tresses, henné)
        $table->boolean('is_available')->default(true);
        $table->timestamps();
    });
}
};
