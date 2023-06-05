<h1>user</h1>
<?php
class User
{
    public function __construct()
    {
        // Kode konstruktor
    }

    public function index()
    {
        // Tampilkan daftar pengguna
        echo "<h2>Daftar Pengguna</h2>";
        // ...
    }

    public function create()
    {
        // Tampilkan form tambah pengguna
        echo "<h2>Tambah Pengguna</h2>";
        // ...
    }

    public function store()
    {
        // Proses data pengguna yang dikirimkan melalui form tambah pengguna
        // ...
        echo "Pengguna baru berhasil ditambahkan";
    }

    public function edit($id)
    {
        // Tampilkan form edit pengguna dengan ID yang diberikan
        echo "<h2>Edit Pengguna dengan ID $id</h2>";
        // ...
    }

    public function update($id)
    {
        // Proses data pengguna yang dikirimkan melalui form edit pengguna dengan ID yang diberikan
        // ...
        echo "Pengguna dengan ID $id berhasil diperbarui";
    }

    public function delete($id)
    {
        // Hapus pengguna dengan ID yang diberikan
        // ...
        echo "Pengguna dengan ID $id berhasil dihapus";
    }
}

// Penggunaan objek User dan pemanggilan metode berdasarkan parameter yang diberikan
$user = new User();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'create') {
        $user->create();
    } elseif ($action === 'store') {
        $user->store();
    } elseif ($action === 'edit' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $user->edit($id);
    } elseif ($action === 'update' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $user->update($id);
    } elseif ($action === 'delete' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $user->delete($id);
    } else {
        $user->index();
    }
} else {
    $user->index();
}
?>