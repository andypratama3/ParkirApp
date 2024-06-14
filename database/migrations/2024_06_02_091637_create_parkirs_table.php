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
        Schema::create('parkirs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('ktp');
            $table->string('plat');
            $table->string('stnk');
            $table->string('warna');
            $table->string('tanggal_lahir');
            $table->string('hp');
            $table->longText('alamat');
            $table->string('status');
            $table->string('tipe_roda');
            $table->string('foto_pembayaran');
            $table->string('lokasi');
            $table->date('tanggal_transfer');
            $table->string('jumlah_transfer');
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkirs');
    }
};
