<?php

namespace App\Http\Controllers;

use App\Models\FilmAktor;
use Illuminate\Http\Request;

class FilmAktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['film_aktor']= FilmAktor::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data Film Aktor";
        return view('film_aktor_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_film'] = \App\Models\Film::selectRaw("id, concat(judul) as
        tampil")->pluck('tampil', 'id');
        $data['list_aktor'] = \App\Models\Aktor::selectRaw("id, concat(judul) as
        tampil")->pluck('tampil', 'id');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'id_film' => 'required',
            'id_aktor' => 'required',
            
            ]);
    
            $film_aktor = new \App\Models\FilmAktor();
            $film_aktor->judul = $request->judul;
            $film_aktor->id_film = $request->id_aktor;
            $film_aktor->save();
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
        $data['film_aktor']= \App\Models\FilmAktor::findOrFail($id);
       
        return view('film_aktor_edit', $data);
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
