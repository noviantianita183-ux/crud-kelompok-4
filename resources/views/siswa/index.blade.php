<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa Kelompok 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h3>Data Siswa - Kelompok 4 ({{ $siswas->total() }})</h3>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

        <table class="table table-bordered">

            <tr>
                <th style="background-color: #ff8fab; color: white;">NIS</th>
                <th style="background-color: #ff8fab; color: white;">Nama</th>
                <th style="background-color: #ff8fab; color: white;">Kelas</th>
                <th style="background-color: #ff8fab; color: white;">Tgl Lahir</th>
                <th style="background-color: #ff8fab; color: white;">Jurusan</th>
                <th style="background-color: #ff8fab; color: white;">Alamat</th>
                <th style="background-color: #ff8fab; color: white;">Keterangan</th>
                <th style="background-color: #ff8fab; color: white;">Aksi</th>
            </tr>
            @foreach($siswas as $s)
            <tr>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->tanggal_lahir }}</td>
                <td>{{ $s->jurusan }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->keterangan }}</td>
                <td class="text-center">
                    <a href="{{ route('siswa.edit',$s->id) }}" class="btn btn-sm" style="background-color: #38bdf8; color: white;">Edit</a>
                    <form action="{{ route('siswa.destroy',$s->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin mau hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>