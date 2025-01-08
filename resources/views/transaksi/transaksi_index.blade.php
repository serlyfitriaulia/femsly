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
                                <th>FILM </th>
                                <th>KODE TRANSAKSI</th>
                                <th>JENIS TRANSAKSI </th>
                                <th>JUMLAH </th>
                                <th>TOTAL </th>
                                <th>TANGGAL </th>
                                <th>STATUS </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $a)
                            <tr>
                                                              
                                <td>{{ $a->user->name }}</td>
                                <td>{{ $a->film->judul }}</td>
                                <td >{{ $a->kode_transaksi }}</td>  
                                <td>{{ $a->jenis_transaksi }}</td>
                                <td>{{ $a->jumlah }}</td>
                                <td>{{ $a->total_harga }}</td>
                                <td>{{ $a->tanggal_transaksi }}</td>
                                <td>{{ $a->status }}</td>
                                <td> 
                                    <a href="{{ url('transaksi/'.$a->id.'/edit', []) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ url('transaksi/'.$a->id, []) }}" method="post" class="d-inline"
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
                    {{ $transaksi->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection