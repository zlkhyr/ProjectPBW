<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peminjam');
            $table->foreignId('id_barang');
            $table->foreignId('id_pemilik');
            $table->string('nama_peminjam');
            $table->decimal('jumlahpinjam', 10, 0);
            $table->decimal('lamapinjam', 10, 0);
            $table->date('deadline');
            $table->string('nama_barang');
            $table->string('foto_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
};
