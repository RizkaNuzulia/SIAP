<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Import the DB facade

use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $arsip = DB::table('arsip')->get();

        // mengirim data pegawai ke view index
        return view('index', ['arsip' => $arsip]);
    }

    // method untuk edit data pegawai
    public function edit($kode)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $arsip = DB::table('arsip')->where('kode', $kode)->get();
        // passing data arsip yang didapat ke view edit.blade.php
        return view('edit', ['arsip' => $arsip]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('arsip')->where('kode', $request->id)->update([
            'kode' => $request->kode,
            'Dokumen' => $request->Dokumen,
            'Perkara' => $request->Perkara,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/arsip');
    }

    // method untuk hapus data pegawai
    public function hapus($kode)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('arsip')->where('kode', $kode)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/arsip');
    }
}
