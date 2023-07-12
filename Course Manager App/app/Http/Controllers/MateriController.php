<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    function create()
    {
        return view('Admin.Materi.create');
    }
    function store()
    {
        $materi = new Materi();
        $materi->judul = request('judul');
        $materi->kursus_id = request('kursus_id');
        $materi->deskripsi = request('deskripsi');
        $materi->embed_link = request('embed_link');
        $materi->save();

        return back()->with('primary', 'Data Kursus Berhasil Ditambahkan');
    }
    function show(Materi $materi){
        $data['materi'] = $materi;
        return view('Admin.Materi.show', compact('materi'));
    }
    function edit(Materi $materi){
        $data['materi'] = $materi;
        return view('Admin.Materi.edit', $data);
    }
    function update(Materi $materi)
    {
        $materi->judul = request('judul');
        $materi->embed_link = request('embed_link');
        $materi->deskripsi = request('deskripsi');

        $materi->save();
        return back()->with('primary', 'Data Berhasil Diedit');
    }
    function destroy(Materi $materi)
    {
        $materi->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
