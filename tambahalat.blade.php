<!-- resources/views/tambahalat.blade.php -->
<form action="{{ route('alatmedis.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama">Nama Alat Medis:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="gambar">Gambar:</label>
    <input type="file" name="gambar" id="gambar" accept="image/*" required>

    <button type="submit">Simpan</button>
</form>
