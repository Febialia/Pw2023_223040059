
<div class="container">
  <div class="sidebar">
    <h2>Dashboard Admin</h2>
    <ul>
      <li><a href="#">Destinasi</a></li>
      <li><a href="#">Kategori</a></li>

    </ul>
  </div>
  <div class="content">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <form action="" method="post">
      <tr>
        <th scope="row">#</th>
        <td>
          <input type="gambar" name="gambar" id="gambar" style="width: 100px;">
        </td>
        <td>
          <input type="text" name="nama_destinasi" id="nama_destinasi" placeholder="Nama Destinasi">
        </td>
        <td>
          <input type="text" name="location" id="location" placeholder="Lokasi">
        </td>
        <td>
          <input type="text" name="desk" id="desk" placeholder="deskripsi">
        </td>
        <td>
          <button type="submit" nama="add" id="add">Tambah</button>
        </td>
      </tr>
    </form>
  </tbody>
</table>
  </div>
</div>