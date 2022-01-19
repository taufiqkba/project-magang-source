<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_acaras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('mitra_id');
            $table->foreignId('sto_id');
            $table->foreignId('status_id');
            $table->string('cust_wo');
            $table->string('cust_name');
            $table->string('cust_phone');
            $table->string('cust_email');
            $table->string('cust_address');
            $table->string('cust_inet');
            $table->string('cust_service');
            $table->string('image_depan_odp');
            $table->string('image_dalam_odp');
            $table->string('image_label_dc');
            $table->string('image_redaman');
            $table->string('image_ont');
            $table->string('image_stb');
            $table->string('image_teknisi_pelanggan');
            $table->string('image_rumah_pelanggan');
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
        Schema::dropIfExists('berita_acaras');
    }
}
