<?php

use Illuminate\Support\Facades\Route; // Mengimpor fasad Route untuk mendefinisikan rute aplikasi
use App\Http\Controllers\ItemController; // Mengimpor ItemController agar bisa digunakan dalam rute
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


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

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('about', function () {
    return 'Nim : 2341720038 <br> Nama : Cindy Laili Larasati';
});

Route::get('/user/{Cindy}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($Id) {
 return 'Halaman Artikel dengan ID '.$Id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', [WelcomeController::class,
'greeting']);
    