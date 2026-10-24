<!DOCTYPE html>
<html>
<head><title>Tambah</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container mt-4">
    <h3>Tambah Siswa</h3>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <input name="nis" placeholder="NIS" class="form-control mb-2" required>
        <input name="nama" placeholder="Nama" class="form-control mb-2" required>
        <input name="kelas" placeholder="Kelas" class="form-control mb-2" required>
        <input name="jurusan" placeholder="Jurusan" class="form-control mb-2" required>
        <input type="date" name="tanggal_lahir" class="form-control mb-2" required>
        <textarea name="alamat" placeholder="Alamat" class="form-control mb-2" required></textarea>
        <textarea name="keterangan" placeholder="Keterangan" class="form-control mb-2" required></textarea>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>