<!DOCTYPE html>
<html>
<head><title>Edit</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container mt-4">
    <h3>Edit Siswa</h3>
    <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
        @csrf @method('PUT')
        <input name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
        <input name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
        <input name="kelas" value="{{ $siswa->kelas }}" class="form-control mb-2">
        <input name="jurusan" value="{{ $siswa->jurusan }}" class="form-control mb-2">
        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control mb-2">
        <textarea name="alamat" class="form-control mb-2">{{ $siswa->alamat }}</textarea>
        <textarea name="keterangan" class="form-control mb-2">{{ $siswa->keterangan }}</textarea>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>