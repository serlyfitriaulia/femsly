<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['film']= Film::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data film";
        return view('film.film_index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_genre'] = \App\Models\Genre::selectRaw("id, concat(nama) as
        tampil")->pluck('tampil', 'id');
        
        return view('film.film_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'genre_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tahun_rilis' => 'required',
            'rating' => 'required',
            'poster_url'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'

            ]);
    
            $film = new \App\Models\Film();
            $film->genre_id = $request->genre_id;
            $film->judul = $request->judul;
            $film->deskripsi = $request->deskripsi;
            $film->tahun_rilis = $request->tahun_rilis;
            $film->rating = $request->rating;

            if ($request->hasFile('poster_url')) {
                $poster_url = $request->file('poster_url');
                $poster_path = $poster_url->store('poster_urls', 'public');
                $film->poster_url = $poster_path;
            }
            $film->save();
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
        $data['film']= \App\Models\Film::findOrFail($id);
        $data['judul']=['Umum', 'Kandungan','Anak','THT'];
        return view('film.film_edit', $data);
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
