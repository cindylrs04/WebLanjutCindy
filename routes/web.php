<?php

use Illuminate\Support\Facades\Route; // Mengimpor fasad Route untuk mendefinisikan rute aplikasi
use App\Http\Controllers\ItemController; // Mengimpor ItemController agar bisa digunakan dalam rute
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // Mendefinisikan rute untuk halaman utama ('/')
    return view('welcome'); // Mengembalikan tampilan 'welcome.blade.php'
});

Route::resource('items', ItemController::class); // Menggunakan resource controller untuk secara otomatis membuat semua rute CRUD untuk 'items'
