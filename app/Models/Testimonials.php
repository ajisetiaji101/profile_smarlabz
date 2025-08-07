<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image', // Kolom untuk menyimpan gambar testimonial
        'content', // Kolom untuk menyimpan konten testimonial
        'position', // Kolom untuk menyimpan posisi atau jabatan
        'company', // Kolom untuk menyimpan nama perusahaan
        'rating', // Kolom untuk menyimpan rating testimonial
    ];
}
