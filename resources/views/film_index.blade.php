@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>GENRE ID</th>
                                <th>JUDUL </th>
                                <th>DESKRIPSI </th>
                                <th>TAHUN RILIS </th>
                                <th>RATING  </th>
                                <th>POSTER  </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($film as $a)
                            <tr>
                                <td>{{ $a->genre_id }}</td>
                                <td>{{ $a->judul }}</td>
                                <td>{{ $a->deskripsi }}</td>
                                <td>{{ $a->tahun_rilis }}</td>
                                <td>{{ $a->rating }}</td>
                                <td>{{ $a->poster }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td> 
                                    <a href="{{ url('film/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('film/'.$a->id, []) }}" method="post" class="d-inline"
                                        onsubmit="return confirm('Apakah Dihapus?')">
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
                <div class="card-footer">
                    {{ $film->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection