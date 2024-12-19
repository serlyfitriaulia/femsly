@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Aktor
                </div>
                <div class="card-body">
                    <form action="{{ url('aktor',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Nama</label>
                            <input id="my-input" class="form-control" type="text" name="nama"
                                value="{{ old('nama') }}">
                                <span class="text-danger">{{ $errors->first('nama') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tanggal Lahir</label>
                            <input id="my-input" class="form-control" type="date" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}">
                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Bio</label>
                            <input id="my-input" class="form-control" type="text" name="bio"
                                value="{{ old('bio') }}">
                                <span class="text-danger">{{ $errors->first('bio') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Foto Url</label>
                            <input id="my-input" class="form-control" type="text" name="foto_url"
                                value="{{ old('foto_url') }}">
                                <span class="text-danger">{{ $errors->first('foto_url') }}</span>

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