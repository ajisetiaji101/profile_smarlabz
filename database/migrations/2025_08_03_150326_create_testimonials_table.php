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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('image')->nullable(); // Kolom untuk menyimpan gambar testimonial
            $table->longText('content'); // Kolom untuk menyimpan konten testimonial
            $table->string('position')->nullable(); // Kolom untuk menyimpan posisi atau jabatan
            $table->string('company')->nullable(); // Kolom untuk menyimpan nama perusahaan
            $table->string('rating')->nullable(); // Kolom untuk menyimpan rating testimonial
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
