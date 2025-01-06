@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold " style="background-color: #3D3D3D; color:white">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="color: white">
                            <thead >
                                <tr class="text-center">
                                    <th style="color:white">GENRE</th>
                                    <th style="color:white">JUDUL</th>
                                    <th style="color:white">DESKRIPSI</th>
                                    <th style="color:white">TAHUN RILIS</th>
                                    <th style="color:white"> RATING</th>
                                    <th style="color:white">POSTER</th>
                                    <th style="color:white">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($film as $a)
                                <tr>
                                    <td>{{ $a->genre->nama }}</td>
                                    <td>{{ $a->judul }}</td>
                                    <td title="{{ $a->deskripsi }}">{{ \Illuminate\Support\Str::limit($a->deskripsi, 50, '...') }}</td>
                                    <td>{{ $a->tahun_rilis }}</td>
                                    <td>{{ $a->rating }}</td>
                                    <td class="text-center">
                                        @if($a->poster_url)
                                            <img src="{{ asset('storage/' . $a->poster_url) }}" alt="Foto Kamar" style="max-width: 80px; height: auto;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('film/'.$a->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ url('film/'.$a->id) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <div class="card-footer" style="background-color: #3D3D3D">
                    {{ $film->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection