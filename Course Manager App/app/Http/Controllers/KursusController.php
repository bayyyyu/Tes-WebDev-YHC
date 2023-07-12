<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    function index(){
        $data['list_kursus']= Kursus::all();
        return view('Admin.Kursus.index', $data);
    }
    function create(){
        return view('Admin.Kursus.create');
    }
    function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'durasi.required' => 'Durasi Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',          
        ]);

        $kursus = new Kursus();
        $kursus->judul = $request->input('judul');
        $kursus->durasi = $request->input('durasi');
        $kursus->deskripsi = $request->input('deskripsi');
        $kursus->save();

        return redirect('Kursus')->with('primary', 'Data Kursus Berhasil Ditambahkan');
    }
    function show(Kursus $kursus)
    {
        $data['kursus'] = $kursus;
        $data['list_materi'] = $kursus->materi;
        return view('Admin.Kursus.show', $data);
    }
    function edit(Kursus $kursus){
        $data['kursus'] = $kursus;
        return view('Admin.Kursus.edit', $data);
    }
    function update(Kursus $kursus){
        $kursus->judul = request('judul');
        $kursus->durasi = request('durasi');
        $kursus->deskripsi = request('deskripsi');

        $kursus->save();
        return redirect('Kursus')->with('primary', 'Data Berhasil Diedit');
    }
    function destroy(Kursus $kursus){
        $kursus->delete();

        return redirect('Kursus')->with('danger', 'Data Berhasil Dihapus');
    }
}
