<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title> 
    <!-- // Menetapkan judul halaman -->
</head>
<body>
    <h1>Edit Item</h1> 
    <!-- // Menampilkan judul halaman -->
    <form action="{{ route('items.update', $item) }}" method="POST"> 
        <!-- // Formulir untuk mengedit item yang sudah ada -->
        @csrf 
        <!-- // Menambahkan token CSRF untuk keamanan dari serangan CSRF -->
        @method('PUT') 
        <!-- // Menggunakan metode HTTP PUT untuk memperbarui data -->
        <label for="name">Name:</label> 
        <!-- // Label dan input untuk mengedit nama item -->
        <input type="text" name="name" value="{{ $item->name }}" required> 
        <!-- // Input teks yang sudah diisi dengan nama item sebelumnya -->
        <br>
        <label for="description">Description:</label> 
        <!-- // Label dan textarea untuk mengedit deskripsi item -->
        <textarea name="description" required>{{ $item->description }}</textarea> 
        <!-- // Textarea sudah diisi dengan deskripsi item sebelumnya -->
        <br>
        <button type="submit">Update Item</button> 
        <!-- //  Tombol untuk mengirim perubahan -->
    </form>
    <a href="{{ route('items.index') }}">Back to List</a> 
    <!-- // Link kembali ke daftar item -->
</body>
</html>