<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['ulasan']= Ulasan::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data Ulasan";
        return view('ulasan.ulasan_index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_rating']=['1','2','3','4','5'];
        $data['list_user'] = \App\Models\User::selectRaw("id, concat(name) as
        tampil")->pluck('tampil', 'id');
        $data['list_film'] = \App\Models\Film::selectRaw("id, concat(judul) as
        tampil")->pluck('tampil', 'id');
        return view('ulasan.ulasan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'rating' => 'required',
            'komentar' => 'required'
            ]);
    
            $ulasan = new \App\Models\Ulasan();
            $ulasan->user_id = $request->user_id;
            $ulasan->film_id = $request->film_id;
            $ulasan->rating = $request->rating;
            $ulasan->komentar = $request->komentar;

            $ulasan->save();
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
        $data['ulasan']= \App\Models\Ulasan::findOrFail($id);
        $data['list_user'] = \App\Models\User::selectRaw("id, concat(name) as
        tampil")->pluck('tampil', 'id');
        $data['list_film'] = \App\Models\Film::selectRaw("id, concat(judul) as
        tampil")->pluck('tampil', 'id');
        $data['list_rating']=['1', '2', '3', '4', '5'];
        return view('ulasan.ulasan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'user_id' => 'required',
            'film_id' => 'required',
            'rating' => 'required',
            'komentar' => 'required',
            
        ]);
        $ulasan = \App\Models\Ulasan::findOrFail($id);
        $ulasan->user_id = $request->user_id;
        $ulasan->film_id = $request->film_id;
        $ulasan->rating = $request->rating;
        $ulasan->komentar = $request->komentar;
        $ulasan->save();

        return redirect('/ulasan')->with('pesan','Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ulasan= \App\Models\Ulasan::findOrFail($id);
        $ulasan->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
}
