@extends('layouts.sbadmin2')
@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Daftar Tontonan
                </div>
                <div class="card-body">
                    <form action="{{ url('daftar_tontonan',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Id Pengguna</label>
                            <input id="my-input" class="form-control" type="text" name="id_pengguna"
                                value="{{ old('id_pengguna') }}">
                                <span class="text-danger">{{ $errors->first('id_pengguna') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Id Film</label>
                            <input id="my-input" class="form-control" type="text" name="id_film"
                                value="{{ old('id_film') }}">
                                <span class="text-danger">{{ $errors->first('id_film') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Deskripsi</label>
                            <input id="my-input" class="form-control" type="text" name="deskripsi"
                                value="{{ old('deskripsi') }}">
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Status</label>
                            <select id="my-select" class="form-control" name="status">
                                @foreach ($list_sp as $a)
                                <option value="{{ $a }}" @selected($a==old('status'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>

                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection