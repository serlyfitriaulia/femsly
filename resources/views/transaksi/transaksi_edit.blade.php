@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Ulasan
                </div>
                <div class="card-body">
                    <form action="{{ url('ulasan',[]) }}" method="POST">

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
                            <label for="my-select">Transaksi</label>
                            <select id="my-select" class="form-control" name="kode_transaksi">
                                <option value="">Pilih Transaksi</option>
                                @foreach ($list_transaksi as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('kode_transaksi'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('kode_transaksi') }}</span>

                        </div>


                        <div class="form-group">
                            <label for="my-select">Jumlah</label>
                            <select id="my-select" class="form-control" name="jumlah">
                                <option value="">Pilih Jumlah</option>
                                @foreach ($list_jumlah as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('jumlah'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Total</label>
                            <input id="my-input" class="form-control" type="number" name="total"
                                value="{{ old('total') }}">
                                <span class="text-danger">{{ $errors->first('total') }}</span>

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