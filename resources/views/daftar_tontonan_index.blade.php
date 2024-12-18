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
                                <th>ID PENGGUNA</th>
                                <th>ID FILM </th>
                                <th>STATUS </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_tontonan as $a)
                            <tr>
                                <td>{{ $a->id_pengguna }}</td>
                                <td>{{ $a->id_film }}</td>
                                <td>{{ $a->status }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td> 
                                    <a href="{{ url('daftar_tontonan/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('daftar_tontonan/'.$a->id, []) }}" method="post" class="d-inline"
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
                    {{ $daftar_tontonan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection