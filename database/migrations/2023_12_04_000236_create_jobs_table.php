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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title', 50)->nullable(false);
            $table->string('company', 50)->nullable(false);
            $table->string('city', 50)->nullable(false);
            $table->enum('time', ['Tempo integral', 'Meio período'])->nullable(false);
            $table->enum('contract', ['CLT', 'Estágio', 'PJ', 'Temporário'])->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('website', 50)->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('tags', 50)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
