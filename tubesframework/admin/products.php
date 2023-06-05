<?php
class Product {
    public function __construct() {
        // Kode konstruktor
    }

    public function index() {
        // Tampilkan daftar produk
        echo "<h2>Daftar Produk</h2>";
        // ...
    }

    public function create() {
        // Tampilkan form tambah produk
        echo "<h2>Tambah Produk</h2>";
        // ...
    }

    public function store() {
        // Proses data produk yang dikirimkan melalui form tambah produk
        // ...
        echo "Produk baru berhasil ditambahkan";
    }

    public function edit($id) {
        // Tampilkan form edit produk dengan ID yang diberikan
        echo "<h2>Edit Produk dengan ID $id</h2>";
        // ...
    }

    public function update($id) {
        // Proses data produk yang dikirimkan melalui form edit produk dengan ID yang diberikan
        // ...
        echo "Produk dengan ID $id berhasil diperbarui";
    }

    public function delete($id) {
        // Hapus produk dengan ID yang diberikan
    }
}