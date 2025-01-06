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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('film_id')->constrained('films')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_transaksi', 20)->unique();
            $table->enum('jenis_transaksi', ['pembelian', 'penyewaan', 'langganan']);
            $table->integer('jumlah')->default(1);
            $table->decimal('total_harga', 10, 2);
            $table->dateTime('tanggal_transaksi');
            $table->enum('status', ['berhasil', 'pending', 'gagal'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
