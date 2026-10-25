<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private function dataJurusan()
    {
        return ['PPLG','TJKT','BC','ELKA'];
    }
    public function index()
    {
        $siswas = Siswa::orderBy('nis', 'asc')->paginate(30);
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $jurusan = $this->dataJurusan();
        return view('siswa.create', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success','Siswa berhasil ditambahkan!');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required|unique:siswas,nis,'.$siswa->id,
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'keterangan' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success','Siswa berhasil diupdate!');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success','Siswa berhasil dihapus!');
    }
}