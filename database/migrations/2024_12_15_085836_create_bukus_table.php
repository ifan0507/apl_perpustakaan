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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku');
            $table->foreignId('category_id')->constrained(
                table: 'category_bukus',
                indexName: 'category_id'
            )->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul');
            $table->string('jenis');
            $table->string('penerbit');
            $table->string('bahasa');
            $table->string('isbn');
            $table->string('pengarang');
            $table->year('tahun_terbit');
            $table->integer('jumlah_halaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
