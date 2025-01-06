@extends('layouts.admin')
@section('admin')
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
                                <th>RATING </th>
                                <th>KOMENTAR </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ulasan as $a)
                            <tr>
                                <td>{{ $a->user->name }}</td>
                                <td>{{ $a->film->judul }}</td>
                                <td>{{ $a->rating }}</td>
                                <td>{{ $a->komentar }}</td>
                                <td> 
                                    <a href="{{ url('ulasan/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('ulasan/'.$a->id, []) }}" method="post" class="d-inline"
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
                    {{ $ulasan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection