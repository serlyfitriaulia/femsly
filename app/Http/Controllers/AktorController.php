<?php

namespace App\Http\Controllers;

use App\Models\Aktor;
use Illuminate\Http\Request;

class AktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['aktor']= Aktor::orderBy('id', 'asc')->paginate(3);
        $data['judul']="Data Aktor";
        return view('aktor.aktor_index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_genre']=['Action', 'Mystery','Romance','Horor','Comedy','Fantasy','Family','Thriller','Drama'];
        return view('aktor.Aktor_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'bio' => 'required',
            'foto_url'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
            

            ]);
    
            $aktor = new \App\Models\Aktor();
            $aktor->nama = $request->nama;
            $aktor->tanggal_lahir = $request->tanggal_lahir;
            $aktor->bio = $request->bio;
            $aktor->foto_url=$request->foto_url;

            if ($request->hasFile('foto_url')) {
                $foto_url = $request->file('foto_url');
                $foto_path = $foto_url->store('foto_url', 'public');
                $aktor->foto_url = $foto_path;
            }

            $aktor->save();
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
        $data['aktor']= \App\Models\Aktor::findOrFail($id);
        $data['list_genre']=['Action', 'Mystery','Romance','Horor','Comedy','Fantasy','Family','Thriller','Drama'];
        return view('aktor.aktor_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'bio' => 'required',
            'poster_url'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
            

            ]);
    
            $aktor = new \App\Models\Aktor();
            $aktor->nama = $request->nama;
            $aktor->tanggal_lahir = $request->tanggal_lahir;
            $aktor->bio = $request->bio;
            $aktor->foto_url=$request->foto_url;

            if ($request->hasFile('foto_url')) {
                $foto_url = $request->file('foto_url');
                $foto_path = $foto_url->store('foto_url', 'public');
                $aktor->foto_url = $foto_path;
            }

            $aktor->save();
            return redirect ('/aktor')->with('pesan', 'Data sudah DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aktor= \App\Models\Aktor::findOrFail($id);
        $aktor->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
}
