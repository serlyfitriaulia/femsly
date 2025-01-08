@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Transaksi
                </div>
                <div class="card-body">
                    <form action="{{ url('transaksi',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                    

                        <div class="form-group">
                            <label for="my-select">Pengguna</label>
                            <select id="my-select" class="form-control" name="user_id">
                                <option value="">Pilih User</option>
                                @foreach ($list_user as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('user_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('user_id') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Film</label>
                            <select id="my-select" class="form-control" name="film_id">
                                <option value="">Pilih Film</option>
                                @foreach ($list_film as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('film_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('film_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Kode Transaksi</label>
                            <input id="my-input" class="form-control" type="text" name="kode_transaksi"
                                value="{{ old('kode_transaksi') }}">
                                <span class="text-danger">{{ $errors->first('kode_transaksi') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Jenis Transaksi</label>
                            <select id="my-select" class="form-control" name="jenis_transaksi">
                                <option value="">Pilih Jenis</option>
                                @foreach ($list_jenis as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('jenis_transaksi'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jenis_transaksi') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Jumlah</label>
                            <input id="my-input" class="form-control" type="number" name="jumlah"
                                value="{{ old('jumlah') }}">
                                <span class="text-danger">{{ $errors->first('jumlah') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Total Harga</label>
                            <input id="my-input" class="form-control" type="number" name="total_harga"
                                value="{{ old('total_harga') }}">
                                <span class="text-danger">{{ $errors->first('total_harga') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tanggal</label>
                            <input id="my-input" class="form-control" type="date" name="tanggal_transaksi"
                                value="{{ old('tanggal_transaksi') }}">
                                <span class="text-danger">{{ $errors->first('tanggal_transaksi') }}</span>

                        </div>
                        

                        <div class="form-group">
                            <label for="my-select">Status</label>
                            <select id="my-select" class="form-control" name="status">
                                <option value="">Pilih Transaksi</option>
                                @foreach ($list_status as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('status'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>

                        </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection