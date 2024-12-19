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
                                <th>Film</th>
                                <th>AKTOR </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($film_aktor as $a)
                            <tr>
                                <td>{{ $a->film->judul }}</td>
                                <td>{{ $a->aktor->nama }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td> 
                                    <a href="{{ url('film_aktor/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('film_aktor/'.$a->id, []) }}" method="post" class="d-inline"
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
                    {{ $film_aktor->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection