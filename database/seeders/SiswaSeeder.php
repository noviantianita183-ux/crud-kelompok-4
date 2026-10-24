<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('siswas')->delete();

        $data = [
            ['nis' => '001', 'nama' => 'Anita', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-07-02', 'alamat' => 'Tunggilis', 'keterangan' => 'Siswa aktif'],
            ['nis' => '002', 'nama' => 'Mellinda', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-06-15', 'alamat' => 'Kalipucang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '003', 'nama' => 'Anissa', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-08-10', 'alamat' => 'Ciparakan', 'keterangan' => 'Siswa aktif'],
            ['nis' => '004', 'nama' => 'Kinza', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-05-20', 'alamat' => 'Cipicung', 'keterangan' => 'Siswa aktif'],
            ['nis' => '005', 'nama' => 'Tio', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-04-11', 'alamat' => 'Cipicung', 'keterangan' => 'Siswa aktif'],
            ['nis' => '006', 'nama' => 'Rizki', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-03-01', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '007', 'nama' => 'Salsa', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-02-14', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '008', 'nama' => 'Dimas', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-01-25', 'alamat' => 'Banjarsari', 'keterangan' => 'Siswa aktif'],
            ['nis' => '009', 'nama' => 'Putri', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-09-09', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '010', 'nama' => 'Bagas', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-10-12', 'alamat' => 'Bandung', 'keterangan' => 'Siswa aktif'],
            ['nis' => '011', 'nama' => 'Aulia', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-11-03', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '012', 'nama' => 'Fajar', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-12-18', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '013', 'nama' => 'Nadia', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-07-11', 'alamat' => 'Tasikmalaya', 'keterangan' => 'Siswa aktif'],
            ['nis' => '014', 'nama' => 'Ilham', 'kelas' => 'X', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-06-22', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '015', 'nama' => 'Citra', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-08-30', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '016', 'nama' => 'Reza', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-05-05', 'alamat' => 'Banjar', 'keterangan' => 'Siswa aktif'],
            ['nis' => '017', 'nama' => 'Lestari', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-04-27', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '018', 'nama' => 'Yoga', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-03-19', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
            ['nis' => '019', 'nama' => 'Dewi', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-02-08', 'alamat' => 'Pangandaran', 'keterangan' => 'Siswa aktif'],
            ['nis' => '020', 'nama' => 'Andi', 'kelas' => 'XI', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-01-10', 'alamat' => 'Padaherang', 'keterangan' => 'Siswa aktif'],
        ];

        foreach ($data as $d) {
            Siswa::create($d);
        }
    }
}