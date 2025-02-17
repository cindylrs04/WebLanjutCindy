<?php

namespace App\Models;
// Menentukan namespace model berada dalam folder App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory; // Menggunakan trait HasFactory untuk membuat factory model
use Illuminate\Database\Eloquent\Model; // Menggunakan kelas Model sebagai dasar dari model Eloquent

// Mendefinisikan kelas Item sebagai model yang mewarisi Eloquent Model
class Item extends Model 
{
    use HasFactory; // Menggunakan trait HasFactory agar model ini dapat menggunakan fitur factory
    protected $fillable = [ // Mendefinisikan atribut yang dapat diisi secara massal (mass assignment)
        'name', // Mengizinkan atribut 'name' untuk diisi secara massal
        'description', // Mengizinkan atribut 'description' untuk diisi secara massal
    ];
}