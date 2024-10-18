<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Görev adı
            $table->text('description')->nullable(); // Görev açıklaması
            $table->enum('status', ['pending', 'completed'])->default('pending'); // Görev durumu
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Görevin sahibi
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
