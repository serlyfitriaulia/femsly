@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Aktor
                </div>
                <div class="card-body">
                    <form action="{{ url('aktor/'.$aktor->id,[]) }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Nama</label>
                            <input id="my-input" class="form-control" type="text" name="nama"
                                value="{{ $aktor->nama ??old('nama') }}">
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
                            <input id="my-input" class="form-control" type="file" name="foto_url"
                                value="{{ old('foto_url') }}">
                                <span class="text-danger">{{ $errors->first('foto_url') }}</span>

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