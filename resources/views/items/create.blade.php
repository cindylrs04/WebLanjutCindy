<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title> // Menetapkan judul halaman
</head>
<body>
    <h1>Add Item</h1> // Menampilkan judul halaman
    <form action="{{ route('items.store') }}" method="POST"> // Formulir untuk menambahkan item baru
        @csrf // Menambahkan token CSRF untuk keamanan dari serangan CSRF
        <label for="name">Name:</label> // Label dan input untuk mengisi nama item
        <input type="text" name="name" required> // Input teks untuk nama item, wajib diisi
        <br>
        <label for="description">Description:</label> // Label dan textarea untuk mengisi deskripsi item
        <textarea name="description" required></textarea> // Textarea untuk deskripsi
        <br>
        <button type="submit">Add Item</button> // Tombol untuk mengirim data item baru
    </form>
    <a href="{{ route('items.index') }}">Back to List</a> // Link kembali ke daftar item
</body>
</html>