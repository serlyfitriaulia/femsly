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
                                <th>NAMA</th>
                                <th>TANGGAL LAHIR </th>
                                <th>BIO </th>
                                <th>FOTO </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aktor as $a)
                            <tr>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->tanggal_lahir }}</td>
                                <td>{{ $a->bio }}</td>
                                
                                <td class="text-center">
                                    @if($a->foto_url)
                                        <img src="{{ asset('storage/' .$a->foto_url) }}" alt="Foto Kamar" style="max-width: 100px; height: auto;">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td> 
                                    <a href="{{ url('aktor/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('aktor/'.$a->id, []) }}" method="post" class="d-inline"
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
                    {{ $aktor->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection