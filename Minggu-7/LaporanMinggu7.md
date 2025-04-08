# Laporan Jobsheet Minggu ke-7
<b>Mata Kuliah : Pemrograman Web Lanjut</b></p>
<b>Program Studi : D4 - Teknik Informatika</b></p>
<b>Semester : 4</b>
<hr>
<b>Kelas : TI 2A</b></p>
<b>NIM : 2341720038</b></p>
<b>Nama : Cindy Laili Larasati</b>
<hr>

<b>Praktikum 1 - Implementasi Authentication<b>
<p align="center">
    <img src="Gambar/P1.png"></p>
<hr>
<b>Tugas 1 - Implementasi Authentication</b></p>
<p>1. Silahkan implementasikan proses login pada project kalian masing-masing</p>
<p>2. Silahkan implementasi proses logout pada halaman web yang kalian buat</p> 
<p>jawab :</p>
<p>Tambahkan kode program di bawah ini pada layouts/sidebar.blade.php</p>
<p align="center">
    <img src="Gambar/T1.1.png"></p>
<p align="center">
    <img src="Gambar/T1.2.png"></p>
<p align="center">
    <img src="Gambar/T1.3.png"></p>
<p align="center">
    <img src="Gambar/T1.4.png"></p>

<p>Lalu tambahkan route pada web.php seperti di bawah ini</p>
<p align="center">
    <img src="Gambar/T1.5.png"></p>

<p>Lalu akan muncul tombol logout pada php yang akan diarahkan ke halaman login
kembali</p>
<p align="center">
    <img src="Gambar/T1.6.png"></p>
<hr>

<b>Praktikum 2 - Implementasi Authorizaton di Laravel dengan Middleware</b></p>
<P>Jika login sebagai admin dapat mengakses halaman level user</P>
<p align="center">
    <img src="Gambar/P2.1.png"></p>
<p align="center">
    <img src="Gambar/P2.2.png"></p>

<P>Jika login sebagai selain admin maka tidak dapat mengakses halaman level user</P>
<p align="center">
    <img src="Gambar/P2.3.png"></p>
<hr>

<b>Tugas 2 - Implementasi Authoriization</b></p>
<p>1. Apa yang kalian pahami pada praktikum 2 ini?</p>
<p>jawab :</p>
<p>- Mengontrol akses ke halaman tertentu sesuai dengan peran pengguna (seperti admin, kasir, dan sebagainya).</p>
<p>- Meningkatkan keamanan aplikasi dengan menambahkan middleware otorisasi (AuthorizeUser).</p>
<hr>

<b>Praktikum 3 - Implementasi Multi-Level Authorizaton di Laravel dengan Middleware</b></p>
<p align="center">
    <img src="Gambar/P3.png"></p>
<hr>

<b>Tugas 3 - Implementasi Multi-Level Authorization</b></p>
<p>1. Silahkan implementasikan multi-level authorization pada project kalian masing-masing</p>
<p>3. Implementasikan multi-level authorization untuk semua Level/Jenis User dan Menu - menu yang sesuai dengan Level/Jenis User</p>
<p>jawab : </p>
<p>Modifikasi pada route untuk implementasi multi-level auth</p>
<p align="center">
    <img src="Gambar/T3.1.png"></p>
<p align="center">
    <img src="Gambar/T3.2.png"></p>
<p align="center">
    <img src="Gambar/T3.3.png"></p>
<p align="center">
    <img src="Gambar/T3.4.png"></p>
<p align="center">
    <img src="Gambar/T3.5.png"></p>
<hr>

<b>Tugas 4 - Implementasi Form Registrasi</b></p>
<p>1. Silahkan implementasikan form untuk registrasi user. </p>
<p>jawab : </p>
<p>- tambahkan function register pada AuthController.php</p>
<p align="center">
    <img src="Gambar/T4.1.png"></p>
    <p align="center">
    <img src="Gambar/T4.2.png"></p>

<p>- buat file register.blade.php di dalam folder resources/views/auth</p>
<p align="center">
    <img src="Gambar/T4.3.png"></p>

<p>- tambahkan kode pada routes</p>
<p align="center">
    <img src="Gambar/T4.4.png"></p>

<p>2. Screenshot hasil yang kalian kerjakan</p>
<p>jawab : </p>
<p align="center">
    <img src="Gambar/T4.5.png"></p>
<p align="center">
    <img src="Gambar/T4.6.png"></p>
