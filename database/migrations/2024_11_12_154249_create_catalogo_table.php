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
        Schema::create('catalogo', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable()->onUpdate('CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo');
    }
};
