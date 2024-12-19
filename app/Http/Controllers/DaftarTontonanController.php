<?php

namespace App\Http\Controllers;

use App\Models\DaftarTontonan;
use Illuminate\Http\Request;

class DaftarTontonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['daftar_tontonan']= DaftarTontonan::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data Daftar Tontonan";
        return view('daftar_tontonan.daftar_tontonan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data['list_status']=['Sedang Menonton', 'Selesai'];
        return view('daftar_tontonan.daftar_tontonan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'daftar_tontonan' => 'required',
            'judul' => 'required',
            'status' => 'required'
            ]);
    
            $daftar_tontonan = new \App\Models\DaftarTontonan();
            $daftar_tontonan->daftar_tontonan = $request->daftar_tontonan;
            $daftar_tontonan->judul = $request->judul;
            $daftar_tontonan->status = $request->status;
            $daftar_tontonan->save();
            return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['daftar_tontonan']= \App\Models\DaftarTontonan::findOrFail($id);
        $data['list_status']=['Sedang Menonton', 'Selesai'];
        return view('daftar_tontonan.daftartontonan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'daftar_tontonan' => 'required',
            'judul' => 'required',
            'status' => 'required'
        ]);
        $daftar_tontonan = \App\Models\DaftarTontonan::findOrFail($id);
        $daftar_tontonan->daftar_tontonan = $request->daftar_tontonan;
        $daftar_tontonan->judul = $request->judul;
        $daftar_tontonan->status = $request->status;
        $daftar_tontonan->save();

        return redirect('/daftar tontonan')->with('pesan','Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daftar_tontonan= \App\Models\DaftarTontonan::findOrFail($id);
        $daftar_tontonan->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
}
