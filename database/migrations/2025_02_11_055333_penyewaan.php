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
        //
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('peralatan_id')->constrained('peralatans')->onDelete('cascade');

            $table->integer('durasi'); // Durasi dalam hari
            $table->decimal('total_harga', 10, 2); // Total harga
            $table->string('metode_pembayaran'); // Metode pembayaran
            $table->string('status')->default('pending'); // Status penyewaan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
