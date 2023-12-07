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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kode_order');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');
            $table->string('name');
            $table->string('nohp');
            $table->date('mulai_sewa');
            $table->date('akhir_sewa')->nullable();
            $table->integer('masa_sewa');
            $table->bigInteger('total_harga');
            $table->enum('status', ['Unpaid','Paid'])->default('Unpaid');
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('rooms');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
