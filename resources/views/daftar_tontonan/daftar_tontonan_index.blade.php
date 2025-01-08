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
                                <th>PENGGUNA</th>
                                <th>FILM</th>
                                <th>STATUS</th>
                                <th>DITAMBAH PADA</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_tontonan as $a)
                            <tr>
                                <!-- Display user name by using the user relationship -->
                                <td>{{ $a->user->name }}</td>
                                
                                <!-- Display film title by using the film relationship -->
                                <td>{{ $a->film->judul }}</td>
                                
                                <td>{{ $a->status }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td>
                                    <a href="{{ url('daftar_tontonan/'.$a->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('daftar_tontonan/'.$a->id) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
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
