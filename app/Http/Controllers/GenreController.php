<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['genre']= Genre::orderBy('id', 'asc')->paginate(3);
        $data['nama']="Nama Genre";
        return view('genre.genre_index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_genre'] = \App\Models\Genre::selectRaw("id, concat(nama) as
        tampil")->pluck('tampil', 'id');

        return view('genre.genre_create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            
            ]);
    
            $Genre = new \App\Models\Genre();
            $Genre->nama = $request->nama;
            $Genre->save();
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
        $data['genre']= \App\Models\Genre::findOrFail($id);
        $data['nama']= ('Nama Genre');
        return view('genre.genre_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
