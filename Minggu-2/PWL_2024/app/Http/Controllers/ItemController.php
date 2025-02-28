<?php

namespace App\Http\Controllers; // Menentukan namespace untuk controller ini

use App\Models\Item; // Mengimpor model Item agar bisa digunakan dalam controller
use Illuminate\Http\Request; // Mengimpor Request untuk menangani data yang dikirim oleh pengguna


class ItemController extends Controller // Mendefinisikan ItemController yang merupakan turunan dari Controller
{
    public function index()  // Method untuk menampilkan semua item
    {
        $items = Item::all(); // Mengambil semua data dari tabel 'items'
        return view('items.index', compact('items')); // Mengirim data ke tampilan 'items.index'
    }

    public function create()  // Method untuk menampilkan halaman form tambah item
    {
        return view('items.create'); // Menampilkan form untuk membuat item baru
    }

    public function store(Request $request) // Method untuk menyimpan data item baru ke database
    {
        $request->validate([ // Validasi input sebelum disimpan ke database
            'name' => 'required',
            'description' => 'required',
        ]);
         
        //Item::create($request->all());
        //return redirect()->route('items.index');

        // Hanya masukkan atribut yang diizinkan
         Item::create($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); // Redirect kembali ke halaman daftar item dengan pesan sukses
    }

    public function show(Item $item)  // Method untuk menampilkan detail item tertentu
    {
        return view('items.show', compact('item')); // Mengirim data item ke tampilan 'items.show'
    }

    public function edit(Item $item)  // Method untuk menampilkan halaman edit item
    {
        return view('items.edit', compact('item')); // Mengirim data item ke tampilan 'items.edit'
    }

    public function update(Request $request, Item $item)  // Method untuk memperbarui data item yang sudah ada
    {
        $request->validate([ // Validasi input sebelum diperbarui
            'name' => 'required',
            'description' => 'required',
        ]);
         
        //$item->update($request->all());
        //return redirect()->route('items.index');
        // Hanya masukkan atribut yang diizinkan
         $item->update($request->only(['name', 'description']));  // Memperbarui data item dengan hanya atribut yang diizinkan
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');  // Redirect kembali ke halaman daftar item dengan pesan sukses
    }

    public function destroy(Item $item)  // Method untuk menghapus item dari database
    {
        
       // return redirect()->route('items.index');
       $item->delete(); // Menghapus item dari database
       return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); // Redirect kembali ke halaman daftar item dengan pesan sukses
    }
}