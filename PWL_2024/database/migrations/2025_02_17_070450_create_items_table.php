<?php

use Illuminate\Database\Migrations\Migration; // Class dasar untuk membuat migration
use Illuminate\Database\Schema\Blueprint; // Class untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Facade untuk manipulasi schema database

return new class extends Migration // Mengembalikan instance anonymous class yang memperluas Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Method untuk menjalankan migration (membuat tabel)
    {
        Schema::create('items', function (Blueprint $table) { // Membuat tabel 'items' dengan skema yang ditentukan
            $table->id(); // Membuat kolom 'id' sebagai primary key dengan auto-increment
            $table->string('name'); // Membuat kolom 'name' dengan tipe data string
            $table->text('description'); // Membuat kolom 'description' dengan tipe data text
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Method untuk membatalkan migration (menghapus tabel)
    {
        Schema::dropIfExists('items'); // Menghapus tabel 'items' jika migration di-rollback
    }
};
