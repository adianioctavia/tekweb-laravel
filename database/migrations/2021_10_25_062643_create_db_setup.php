<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama', '255');
            $table->string('alamat', '255');
            $table->string('no_hp', '255');
            $table->string('email', '255');
            $table->timestamps();
        });

        Schema::create('tb_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id();
            $table->string('filename', 255);
            $table->string('nama', '255');
            $table->integer('stok');
            $table->unsignedBigInteger('kategori_id');
            $table->integer('harga');
            $table->timestamps();
        });

        Schema::create('tb_pembelian', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl');
            $table->string('ekspedisi', '255');
            $table->integer('total');
            $table->timestamps();
        });


        Schema::create('tb_pesan', function (Blueprint $table) {
            $table->integer('id_pelanggan');
            $table->integer('id_produk');
            $table->timestamps();

            $table->primary(['id_pelanggan', 'id_produk']);
        });

        Schema::create('tb_kirim', function (Blueprint $table) {
            $table->integer('id_pembelian');
            $table->integer('id_pelanggan');
            $table->timestamps();

            $table->primary(['id_pembelian', 'id_pelanggan']);
        });

        Schema::create('tb_memuat', function (Blueprint $table) {
            $table->integer('id_produk');
            $table->integer('id_pembelian');
            $table->timestamps();

            $table->primary(['id_produk', 'id_pembelian']);
        });

        Schema::create('tb_konfirmasi', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->integer('id_pembelian');
            $table->timestamps();

            $table->primary(['user_id', 'id_pembelian']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pelanggan');
        Schema::dropIfExists('tb_produk');
        Schema::dropIfExists('tb_pembelian');
        Schema::dropIfExists('tb_pesan');
        Schema::dropIfExists('tb_kirim');
        Schema::dropIfExists('tb_memuat');
        Schema::dropIfExists('tb_konfirmasi');
        Schema::dropIfExists('tb_kategori');
    }
}
