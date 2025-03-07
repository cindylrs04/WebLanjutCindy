# Laporan Jobsheet Minggu ke-4 
<b>Mata Kuliah : Pemrograman Web Lanjut</b></p>
<b>Program Studi : D4 - Teknik Informatika</b></p>
<b>Semester : 4</b>
<hr>
<b>Kelas : TI 2A</b></p>
<b>NIM : 2341720038</b></p>
<b>Nama : Cindy Laili Larasati</b>
<hr>

<b>Praktikum 1 - $fillable</b>
<p>langkah 3
<p>Variabel $fillable berfungsi untuk mendefinisikan atribut atau nama kolom dalam tabel yang dapat diisi secara langsung ketika melakukan proses penyimpanan (insert) atau pembaruan (update) data ke dalam database.
<p align="center">
    <img src="Gambar/gambarP1No3.png"></p>

<p>langkah 6 
<p>jika kolom di fillable di hapus maka akan seperti gambar di bawah
<p align="center">
    <img src="Gambar/gambarP1No6.png"></p>
<hr>

<b>Praktikum 2.1 - Retrieving Single Models</b>
<p>langkah 3
<p> Saat program dijalankan di browser, halaman web akan menampilkan tabel yang berisi informasi pengguna dengan user_id = 1. Jika data tersebut ada di database, maka informasi akan muncul dengan benar sesuai yang diharapkan.
<p align="center">
    <img src="Gambar/gambarP2.1No3.png"></p>

<p>langkah 5
<p>Ketika dijalankan di browser, kedua kode tersebut akan menampilkan data pengguna yang memiliki level_id = 1. Jika data tersedia, informasi pengguna pertama yang sesuai akan ditampilkan dalam tabel. Baik metode where('level_id', 1)->first() maupun firstWhere('level_id', 1) memberikan hasil yang sama, yaitu mengambil satu baris pertama yang sesuai dari database.
<p align="center">
    <img src="Gambar/gambarP2.1No3.png"></p>

<p>langkah 7
<p>Ketika dijalankan di browser, program akan mencari data pengguna dengan user_id = 1
<p align="center">
    <img src="Gambar/gambarP2.1No3.png"></p>

<p>langkah 9
<p>Saat dijalankan di browser, program akan mencari data pengguna dengan user_id = 1. Jika data ditemukan, hanya kolom username dan nama yang akan ditampilkan dalam tabel. 
<p align="center">
    <img src="Gambar/gambarP2.1No9.png"></p>

<p>langkah 11
<p>Ketika dijalankan di browser, program akan mencari data pengguna dengan user_id = 20. Jika data tersedia, hanya informasi pada kolom username dan nama yang akan ditampilkan dalam tabel. Namun, jika data tidak ditemukan, sistem secara otomatis akan menampilkan halaman error 404 karena adanya fungsi abort(404)
<p align="center">
    <img src="Gambar/gambarP2.1No11.png"></p>
<hr>

<b>Praktikum 2.2 - Not Found Exceptions</b>
<p>langkah 2
<p>Ketika dijalankan di browser, program akan mencari data pengguna dengan user_id = 1. Jika data tersedia, informasi pengguna akan ditampilkan dalam tabel. Namun, jika data tidak ditemukan, sistem secara otomatis akan menampilkan error 404 karena metode findOrFail(1) akan langsung menghentikan proses dan menampilkan error jika data yang dicari tidak ditemukan dalam database.
<p align="center">
    <img src="Gambar/gambarP2.1No3.png"></p>

<p>langkah 4
<p>Saat dijalankan di browser, program akan mencari data pengguna dengan username = 'manager9'. Jika data ditemukan, informasi pengguna tersebut akan ditampilkan dalam tabel. Namun, jika data tidak ditemukan, sistem akan otomatis menampilkan error 404 karena metode firstOrFail() akan langsung menghentikan proses dan memunculkan error jika data yang dicari tidak tersedia dalam database.
<p align="center">
   <img src="Gambar/gambarP2.1No11.png"></p>
<hr>

<b>Praktikum 2.3 - Retreiving Aggregrates</b>
<p>langkah 2
<p>Ketika dijalankan di browser, program akan menghitung jumlah pengguna yang memiliki level_id = 2 menggunakan metode count(). Namun, karena terdapat fungsi dd($user), proses akan terhenti seperti pada gambar di bawah
<p align="center">
    <img src="Gambar/gambarP2.3No2.png"></p>

<p>langkah 3
setelah di modifikasi maka akan muncul seperti gambar berikut
<p align="center">
   <img src="Gambar/gambarP2.3No3.png"></p>
<hr>

<b>Praktikum 2.4 - Retreiving Aggregrates</b>
<p>langkah 3
<p>Saat dijalankan di browser, program akan mencari data pengguna dengan username = 'manager' dan nama = 'Manager'. Jika data tersebut sudah ada di database, maka data yang ditemukan akan ditampilkan dalam tabel. 
<p align="center">
    <img src="Gambar/gambarP2.4No3.png"></p>

<p>langkah 5
<p>Ketika dijalankan di browser, program akan mencari data pengguna dengan username = 'manager22' dan nama = 'Manager Dua Dua'. Jika data tersebut sudah ada dalam database, maka sistem akan menampilkan data yang ditemukan. 
<p align="center">
    <img src="Gambar/gambarP2.4No5.png"></p>

<p>langkah 7
<p>Ketika dijalankan di browser, program akan mencari data pengguna dengan username = 'manager' dan nama = 'Manager'. Jika data sudah ada, maka akan ditampilkan.
<p align="center">
    <img src="Gambar/gambarP2.4No7.png"></p>

<p>langkah 9
<p>Saat dijalankan di browser, program akan mencari pengguna dengan username = 'manager33' dan nama = 'Manager Tiga Tiga'. Jika data ditemukan, maka akan ditampilkan.
<p align="center">
    <img src="Gambar/gambarP2.4No9.png"></p>

<p>langkah 11
<p>Saat dijalankan di browser, program akan mencari pengguna dengan username = 'manager33' dan nama = 'Manager Tiga Tiga'. Jika data sudah ada, maka akan ditampilkan. Jika belum ada, sistem akan membuat pengguna baru dan langsung menyimpannya ke database menggunakan $user->save(), sehingga data akan tersimpan secara permanen.
<p align="center">
    <img src="Gambar/gambarP2.4No11.png"></p>
     <img src="Gambar/gambarP2.4No11.2.png"></p>
<hr>

<b>Praktikum 2.5 – Attribute Changes</b>
<p>langkah 2
<p>Saat dijalankan di browser, program akan membuat pengguna baru dengan username = 'manager55', lalu mengubahnya menjadi manager56. Sebelum data disimpan, isDirty() mendeteksi perubahan pada atribut yang diubah, sementara isClean() memastikan atribut yang tidak berubah. Setelah data disimpan dengan $user->save(), isDirty() menjadi false dan isClean() menjadi true, lalu program menampilkan false karena tidak ada perubahan lagi.
<p align="center">
    <img src="Gambar/gambarP2.5No2.png"></p>

<p>langkah 4
<p>Saat dijalankan di browser, program akan membuat pengguna baru dengan username = 'manager11', lalu mengubahnya menjadi manager12. Setelah disimpan, metode wasChanged() akan mendeteksi perubahan pada username, sedangkan nama tetap sama. Program kemudian menampilkan true karena ada perubahan pada username.
<p align="center">
    <img src="Gambar/gambarP2.5No4.png"></p>
<hr>

<b>Praktikum 2.6 – Create, Read, Update, Delete (CRUD)</b>
<p>langkah 3
<p>Saat dijalankan di browser, halaman akan menampilkan daftar pengguna dalam tabel. Jika ada data di database, informasi seperti ID, username, nama, dan level pengguna akan ditampilkan. Tersedia juga opsi untuk mengubah atau menghapus data. 
<p align="center">
    <img src="Gambar/gambarP2.6No3.png"></p>

<p>langkah 7
<p>Saat dijalankan di browser, halaman akan menampilkan formulir untuk menambahkan data pengguna baru. Pengguna dapat mengisi username, nama, password, dan level ID, lalu menekan tombol "Simpan".
<p align="center">
    <img src="Gambar/gambarP2.6No7.png"></p>

<p>langkah 10
<p>Saat dijalankan di browser, pengguna dapat mengisi formulir tambah user dan mengirimkan data. Setelah submit, data akan disimpan ke database dengan password yang telah dienkripsi menggunakan Hash::make().
<p align="center">
    <img src="Gambar/gambarP2.6No10.png"></p>

<p>langkah 14
<p>Saat dijalankan di browser, halaman akan menampilkan formulir untuk mengubah data pengguna berdasarkan user_id yang dipilih. Data pengguna yang sudah ada akan otomatis terisi di dalam formulir. Setelah perubahan dilakukan dan formulir disubmit, data akan dikirim ke route /user/ubah_simpan/{id} untuk diperbarui di database.
<p align="center">
    <img src="Gambar/gambarP2.6No14.png"></p>

<p>langkah 17
<p>Saat dijalankan di browser, program akan memperbarui data pengguna berdasarkan user_id yang dipilih. Setelah formulir diubah dan disubmit, data baru akan disimpan ke database. Password juga akan dienkripsi ulang dengan Hash::make(). 
<p align="center">
    <img src="Gambar/gambarP2.6No17.png"></p>

<p>langkah 20
<p>Saat dijalankan di browser, program akan menghapus data pengguna berdasarkan user_id yang dipilih. Ketika tautan "Hapus" diklik, sistem akan mencari data pengguna dengan ID tersebut, lalu menghapusnya dari database. 
<p align="center">
    <img src="Gambar/gambarP2.6No20.png"></p>
<hr>

<b>Praktikum 2.7 – Relationships</b>
<p>langkah 3
<p>Saat dijalankan di browser, program akan mengambil semua data pengguna dari tabel m_user beserta informasi levelnya melalui relasi belongsTo dengan LevelModel.
<p align="center">
    <img src="Gambar/gambarP2.6No3.png"></p>

<p>langkah 6
<p>Saat dijalankan di browser, program akan menampilkan daftar pengguna dalam bentuk tabel. Data yang ditampilkan mencakup ID pengguna, username, nama, ID level pengguna, kode level, dan nama level.Karena pada controller UserModel::with('level')->get(); digunakan, maka sistem akan mengambil data pengguna beserta informasi levelnya melalui relasi belongsTo dengan LevelModel.
<p align="center">
    <img src="Gambar/gambarP2.7No6.png"></p>
<hr>