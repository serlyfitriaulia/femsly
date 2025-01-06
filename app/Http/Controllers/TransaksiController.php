<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transaksi']= Transaksi::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data transaksi";
        return view('transaksi.transaksi_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_id']=['1','2','3','4','5'];
        $data['list_user'] = \App\Models\User::selectRaw("id, concat(name) as tampil")->pluck('tampil', 'id');
        $data['list_film'] = \App\Models\Film::selectRaw("id, concat(judul) as tampil")->pluck('tampil', 'id');
        $data['list_jenis']=['pembelian','penyewaan','langganan'];
        $data['list_status']=['berhasil','pending','gagal'];

    
        return view('transaksi.transaksi_create', $data);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'kode_transaksi' => 'required',
            'jenis_transaksi' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'tanggal_transaksi' => 'required',
            'status' => 'required'


            ]);
    
            $transaksi = new \App\Models\Transaksi();
            $transaksi->user_id = $request->user_id;
            $transaksi->film_id = $request->film_id;
            $transaksi->kode_transaksi = $request->kode_transaksi;
            $transaksi->jenis_transaksi = $request->jenis_transaksi;
            $transaksi->jumlah = $request->jumlah;
            $transaksi->total_harga = $request->total_harga;
            $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
            $transaksi->status = $request->status;


            $transaksi->save();
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
        $data['list_id']=['1','2','3','4','5'];
        $data['list_user'] = \App\Models\User::selectRaw("id, concat(name) as tampil")->pluck('tampil', 'id');
        $data['list_film'] = \App\Models\Film::selectRaw("id, concat(judul) as tampil")->pluck('tampil', 'id');
        $data['list_jenis']=['pembelian','penyewaan','langganan'];
        $data['list_status']=['berhasil','pending','gagal'];

    
        return view('transaksi.transaksi_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'kode_transaksi' => 'required',
            'jenis_transaksi' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'tanggal_transaksi' => 'required',
            'status' => 'required'


            ]);
    
            $transaksi = \App\Models\Transaksi::findOrFail($id);
            $transaksi->user_id = $request->user_id;
            $transaksi->film_id = $request->film_id;
            $transaksi->kode_transaksi = $request->kode_transaksi;
            $transaksi->jenis_transaksi = $request->jenis_transaksi;
            $transaksi->jumlah = $request->jumlah;
            $transaksi->total_harga = $request->total_harga;
            $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
            $transaksi->status = $request->status;


            $transaksi->save();
            return back()->with('pesan', 'Data sudah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi= \App\Models\Transaksi::findOrFail($id);
        $transaksi->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
}
