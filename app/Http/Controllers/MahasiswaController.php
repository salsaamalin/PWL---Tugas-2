<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
    $mahasiswas = Mahasiswa::all();
    return view('mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->hobi = $request->hobi;
        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    public function show()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }



}
