# Laporan Jobsheet Minggu ke-11
<b>Mata Kuliah : Pemrograman Web Lanjut</b></p>
<b>Program Studi : D4 - Teknik Informatika</b></p>
<b>Semester : 4</b>
<hr>
<b>Kelas : TI 2A</b></p>
<b>NIM : 2341720038</b></p>
<b>Nama : Cindy Laili Larasati</b>
<hr>

<b>Praktikum 1 - Membuat RESTful API Register<b>
<p>Langkah 8</p>
<p align="center">
    <img src="Gambar/P1.1.png"></p>

<p>Langkah 10</p>
<p align="center">
    <img src="Gambar/P1.2.png"></p>
<p>Perbedaanya:</p>
<p>Saat menggunakan 'image' => $request->image, yang tersimpan di database adalah path file sementara dari komputer lokal (seperti C:\Users\Lenovo\AppData\Local\Temp), sehingga file bisa hilang setelah request selesai. Sedangkan saat menggunakan 'image' => $request->image->hashName(), gambar diupload dan disimpan permanen ke server dengan nama file unik di folder storage, sehingga URL gambar valid, file tidak hilang, dan bisa diakses kapan saja.</p>
<hr>

<b>Tugas - Implemetasi API di tabel Barang<b>
<p align="center">
    <img src="Gambar/T1.png"></p>
<p align="center">
    <img src="Gambar/T2.png"></p>
<hr>